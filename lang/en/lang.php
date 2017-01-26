<?php namespace AlexLit\VkWidgets\Components;

return [
    'vkgroup' => [
        'name' => 'Community',
        'description' => 'A Community widget links your site with your VK community. Your users will be able to subscribe to your VK feed without leaving the page.',
        'group_id' => [
            'title' => 'VK community ID',
            'description' => 'VK community ID',
            'placeholder' => 'VK community ID'
        ],
        'mode' => [
            'title' => 'Вид',
            'description' => 'Режим отображения. Возможные значения: "Участники" -  отображать участников сообщества, "Только название" — отображать только название сообщества, "Новости" — отображать стену сообщества.',
            'options' => [
                'subscribers' => 'Участники',
                'news' => 'Новости',
                'name' => 'Только название'
            ]
        ],
        'width' => [
            'title' => 'Ширина',
            'description' => 'Ширина блока в пикселах. Минимальное значение: 120. При значении "auto" подстраивается под ширину блока.',
            'placeholder' => 'Ширина блока в пикселах'
        ],
        'height' => [
            'title' => 'Высота',
            'description' => 'Высота блока в пикселах. Минимальное значение: 200. Максимальное значение: 1200. Обратите внимание, для вида «Только название» или «Участники» параметр недоступен, высота определяется автоматически в зависимости от размера родительского блока.',
            'placeholder' => 'Высота блока в пикселах'
        ],
        'color1' => [
            'title' => 'Цвет фона',
            'description' => 'Цвет фона виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB'
        ],
        'color2' => [
            'title' => 'Цвет текста',
            'description' => 'Цвет текста виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB'
        ],
        'color3' => [
            'title' => 'Цвет кнопок',
            'description' => 'Цвет кнопок виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB'
        ],
        'wide' => [
            'title' => 'Расширенный режим',
            'description' => 'Расширенный режим. В режиме «Новости» добавляется кнопка «Мне нравится» и фотография сообщества.'
        ]
    ]
];

?>
