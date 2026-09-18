<?php

return [
    'email' => 'admin@valourite.co.za',
    'contacts' => [
        ['name' => 'Dayne', 'display' => '079 468 2081', 'number' => '27794682081'],
        ['name' => 'Ivan', 'display' => '071 492 0019', 'number' => '27714920019'],
    ],
    'services' => [
        [
            'id' => 'business-automation', 'name' => 'Business Automation', 'icon' => 'automation',
            'heading' => 'Less admin. More progress.',
            'description' => 'Custom business software that connects your people, processes and information. Built around the way you work.',
            'summary' => ['Less repetitive admin', 'Connected business systems', 'Clear reporting'],
            'points' => ['Manage customers, quotes and invoices', 'Automate workflows, approvals and everyday tasks', 'See the bigger picture with practical reporting'],
            'cta' => 'Let’s talk automation', 'image' => 'automation',
        ],
        [
            'id' => 'mining-industry', 'name' => 'Mining & Industry', 'icon' => 'industry',
            'heading' => 'Keep your operation moving.',
            'description' => 'Practical software for mining suppliers and industrial businesses. Keep stock, job cards and people working together.',
            'summary' => ['Stock management', 'Digital job cards', 'Teams and workflows'],
            'points' => ['Track stock and inventory movements', 'Manage job cards from request to completion', 'Control user access and automate workflows'],
            'cta' => 'Discuss your operation', 'image' => 'industry',
        ],
        [
            'id' => 'websites', 'name' => 'Website Development', 'icon' => 'website',
            'heading' => 'Make your first impression count.',
            'description' => 'Distinctive websites for businesses across South Africa, with hosting and ongoing maintenance to keep things running.',
            'summary' => ['Beautiful, responsive websites', 'Built to be found', 'Hosting and maintenance'],
            'points' => ['Thoughtful design on every screen', 'Search-friendly structure and clear calls to action', 'Hosting, updates and ongoing care'],
            'cta' => 'Let’s talk websites', 'image' => null,
        ],
        [
            'id' => 'mobile-applications', 'name' => 'Mobile Applications', 'icon' => 'mobile',
            'heading' => 'Your business. Wherever you are.',
            'description' => 'Android and iOS apps built for your customers and your team. Bring the tools they need into their hands.',
            'summary' => ['Android and iOS', 'Customer and staff apps', 'Connected to your systems'],
            'points' => ['Simple, intuitive mobile experiences', 'Connect your app to your business systems', 'Customer services and internal staff tools'],
            'cta' => 'Discuss your app', 'image' => null,
        ],
    ],
    // Add genuine, approved quotes here. Sample entries never render in production.
    'testimonials' => [
        ['quote' => 'The system brings our daily work into one place.', 'name' => 'Mark S.', 'rating' => 5, 'sample' => false],
        ['quote' => 'A clear process, from the first conversation to the finished website.', 'name' => 'James L.', 'rating' => 5, 'sample' => false],
        ['quote' => 'Less time on repetitive admin. More time for our customers.', 'name' => 'Werner DB.', 'rating' => 5, 'sample' => false],
        ['quote' => 'Our job cards are much easier to follow.', 'name' => 'Brandon W.', 'rating' => 5, 'sample' => false],
        ['quote' => 'It feels like software built around our team.', 'name' => 'Thabo S.', 'rating' => 5, 'sample' => false],
        ['quote' => 'Helpful communication throughout the project.', 'name' => 'Mpumi M.', 'rating' => 5, 'sample' => false],
        ['quote' => 'We can find the information we need without chasing spreadsheets.', 'name' => 'Walter RS.', 'rating' => 5, 'sample' => false],
        ['quote' => 'A clean website that is easy for our customers to use.', 'name' => 'Thandi W.', 'rating' => 5, 'sample' => false],
        ['quote' => 'Practical ideas that made our everyday processes simpler.', 'name' => 'Jean O.', 'rating' => 5, 'sample' => false],
        ['quote' => 'The mobile tools keep our team connected on the go.', 'name' => 'Pieter VW.', 'rating' => 5, 'sample' => false],
    ],
    // Supply public image paths and approved project URLs when screenshots are available.
    'projects' => [],
    'app_screenshots' => [],
];
