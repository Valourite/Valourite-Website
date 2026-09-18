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
const dialog = document.querySelector("#contact-dialog");
if (dialog && typeof dialog.showModal === "function") {
    let opener;
    document.querySelectorAll("[data-contact-open]").forEach((link) =>
        link.addEventListener("click", (event) => {
            event.preventDefault();
            opener = link;
            dialog.showModal();
        }),
    );
    dialog
        .querySelector(".dialog-close")
        .addEventListener("click", () => dialog.close());
    dialog.addEventListener("click", (event) => {
        const bounds = dialog.getBoundingClientRect();
        if (
            event.clientX < bounds.left ||
            event.clientX > bounds.right ||
            event.clientY < bounds.top ||
            event.clientY > bounds.bottom
        )
            dialog.close();
    });
    dialog.addEventListener("close", () => opener?.focus());
}
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
                repeat.inert = true;
                original.append(repeat);
                index++;
            }
            const clone = original.cloneNode(true);
            clone.dataset.clone = "true";
            clone.setAttribute("aria-hidden", "true");
            clone.inert = true;
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
    const pause = document.querySelector(".pause-reviews");
    pause.hidden = false;
    pause.addEventListener("click", () => {
        const paused = testimonials.classList.toggle("is-paused");
        pause.setAttribute("aria-pressed", String(paused));
        pause.textContent = paused ? "Resume scrolling" : "Pause scrolling";
    });
}
const feedback = document.querySelector(".form-errors, .form-success");
if (feedback) {
    feedback.setAttribute("tabindex", "-1");
    feedback.focus({ preventScroll: true });
    document.querySelector("#contact").scrollIntoView({ behavior: "instant" });
}
