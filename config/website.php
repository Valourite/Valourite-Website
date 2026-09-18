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
        ['quote' => 'The system brings our daily work into one place.', 'name' => 'Sample client 01', 'rating' => 5, 'sample' => true],
        ['quote' => 'A clear process, from the first conversation to the finished website.', 'name' => 'Sample client 02', 'rating' => 5, 'sample' => true],
        ['quote' => 'Less time on repetitive admin. More time for our customers.', 'name' => 'Sample client 03', 'rating' => 5, 'sample' => true],
        ['quote' => 'Our job cards are much easier to follow.', 'name' => 'Sample client 04', 'rating' => 5, 'sample' => true],
        ['quote' => 'It feels like software built around our team.', 'name' => 'Sample client 05', 'rating' => 5, 'sample' => true],
        ['quote' => 'Helpful communication throughout the project.', 'name' => 'Sample client 06', 'rating' => 5, 'sample' => true],
        ['quote' => 'We can find the information we need without chasing spreadsheets.', 'name' => 'Sample client 07', 'rating' => 5, 'sample' => true],
        ['quote' => 'A clean website that is easy for our customers to use.', 'name' => 'Sample client 08', 'rating' => 5, 'sample' => true],
        ['quote' => 'Practical ideas that made our everyday processes simpler.', 'name' => 'Sample client 09', 'rating' => 5, 'sample' => true],
        ['quote' => 'The mobile tools keep our team connected on the go.', 'name' => 'Sample client 10', 'rating' => 5, 'sample' => true],
    ],
    // Supply public image paths and approved project URLs when screenshots are available.
    'projects' => [],
    'app_screenshots' => [],
];
