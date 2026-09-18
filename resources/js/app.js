const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
const menu = document.querySelector(".menu-toggle");
const navigation = document.querySelector("#navigation");
if (menu && navigation) {
    menu.hidden = false;
    menu.closest("header").classList.add("has-menu");
    const closeMenu = () => {
        menu.setAttribute("aria-expanded", "false");
        navigation.classList.remove("is-open");
    };
    menu.addEventListener("click", () => {
        const expanded = menu.getAttribute("aria-expanded") !== "true";
        menu.setAttribute("aria-expanded", String(expanded));
        navigation.classList.toggle("is-open", expanded);
    });
    navigation
        .querySelectorAll("a")
        .forEach((link) => link.addEventListener("click", closeMenu));
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") closeMenu();
    });
}
const mobileLayout = window.matchMedia("(max-width: 700px)");
const contactLinks = document.querySelectorAll("[data-contact-cta]");
const updateContactLinks = () => {
    contactLinks.forEach((link) => {
        link.href = mobileLayout.matches
            ? link.dataset.mobileHref
            : "#enquiry-form";
    });
};
updateContactLinks();
mobileLayout.addEventListener("change", updateContactLinks);
contactLinks.forEach((link) =>
    link.addEventListener("click", () => {
        if (!mobileLayout.matches) {
            document
                .querySelector("#enquiry-form")
                ?.focus({ preventScroll: true });
        }
    }),
);
if ("IntersectionObserver" in window && !reducedMotion.matches) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("is-waiting");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 },
    );
    document.querySelectorAll(".reveal").forEach((element) => {
        if (element.getBoundingClientRect().top > window.innerHeight) {
            element.classList.add("is-waiting");
            observer.observe(element);
        }
    });
    reducedMotion.addEventListener("change", (event) => {
        if (event.matches) {
            document
                .querySelectorAll(".is-waiting")
                .forEach((element) => element.classList.remove("is-waiting"));
            observer.disconnect();
        }
    });
}
const testimonials = document.querySelector(".testimonials");
if (testimonials) {
    const fillReviewRows = () => {
        document.querySelectorAll(".review-row").forEach((row) => {
            const original = row.querySelector(".review-set");
            row.querySelectorAll("[data-clone], [data-repeat]").forEach(
                (element) => element.remove(),
            );
            const cards = [...original.children];
            if (!cards.length) return;
            let index = 0;
            while (
                original.getBoundingClientRect().width < row.clientWidth &&
                index < 100
            ) {
                const repeat = cards[index % cards.length].cloneNode(true);
                repeat.dataset.repeat = "true";
                repeat.setAttribute("aria-hidden", "true");
                repeat.removeAttribute("tabindex");
                original.append(repeat);
                index++;
            }
            const clone = original.cloneNode(true);
            clone.dataset.clone = "true";
            clone.setAttribute("aria-hidden", "true");
            clone
                .querySelectorAll("[tabindex]")
                .forEach((card) => card.removeAttribute("tabindex"));
            row.querySelector(".review-track").append(clone);
            row.classList.add("is-animated");
        });
    };
    fillReviewRows();
    let resizeTimer;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(fillReviewRows, 150);
    });
    const clearPressedReview = () => {
        testimonials
            .querySelectorAll(".is-pressed")
            .forEach((card) => card.classList.remove("is-pressed"));
    };
    testimonials.addEventListener("pointerdown", (event) => {
        if (event.pointerType === "mouse") return;
        clearPressedReview();
        event.target.closest(".review-card")?.classList.add("is-pressed");
    });
    window.addEventListener("pointerup", clearPressedReview);
    window.addEventListener("pointercancel", clearPressedReview);
}
const feedback = document.querySelector(".form-errors, .form-success");
if (feedback) {
    feedback.setAttribute("tabindex", "-1");
    feedback.focus({ preventScroll: true });
    document.querySelector("#contact").scrollIntoView({ behavior: "instant" });
}
