<?php

return [
    'plugin' => [
            'name'        => 'VK Widgets',
            'description' => 'Easy add VK Widgets'
    ],
    'vkcommunity' => [
        'name' => 'Community',
        'description' => 'A Community widget links your site with your VK community. Your users will be able to subscribe to your VK feed without leaving the page.',
        'group_id' => [
            'title' => 'VK community ID',
            'description' => 'VK community ID',
            'placeholder' => 'VK community ID',
            'validationmessage' => 'Field must be empty or contain integer!'
        ],
        'mode' => [
            'title' => 'Layout',
            'description' => '"Members" - display community members, "Name only" — display community name only, "News" — display community feed.',
            'options' => [
                'subscribers' => 'Members',
                'news' => 'News',
                'name' => 'Name only'
            ]
        ],
        'width' => [
            'title' => 'Width',
            'description' => 'Sets module width in pixels (integer more than 120). If value is auto it adjusts to the module width.',
            'placeholder' => 'Module width in pixels',
            'validationmessage' => 'Field can be empty, contain a number or set to auto!'
        ],
        'height' => [
            'title' => 'Height',
            'description' => 'Sets module height in pixels (integer from 200 to 600).',
            'placeholder' => 'Module height in pixels',
            'validationmessage' => 'Field can be empty, contain a number or set to auto!'
        ],
        'color1' => [
            'title' => 'Background color',
            'description' => 'Widget background color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Background color should be in RRGGBB format or empty!'
        ],
        'color2' => [
            'title' => 'Text color',
            'description' => 'Text color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Text color should be in RRGGBB format or empty!'
        ],
        'color3' => [
            'title' => 'Buttons color',
            'description' => 'Button color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Buttons color should be in RRGGBB format or empty!'
        ],
        'wide' => [
            'title' => 'Wide mode',
            'description' => 'Disabled — standard mode. Enabled — if feed is displayed, posts in this mode are displayed with the community photo and Like counts.'
        ]
    ]
];

?>
