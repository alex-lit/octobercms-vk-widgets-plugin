<?php namespace AlexLit\VkWidgets\Components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkCommentsWidget extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Виджет комментариев Вконтакте',
            'description' => 'Подключение виджета к Вашему сайту'
        ];
    }

    public function defineProperties()
    {
        return [
            'group_id' => [
                'title'             => 'Ссылка на страницу',
                'type'              => 'string',
                'default'           => '20003922',
                'description'       => 'Идентификатор сообщества. Указывается без знака «минус».',
                'placeholder'       => 'Идентификатор сообщества'
            ],
            'mode' => [
                'title'             => 'Вид',
                'type'              => 'dropdown',
                'options'           => ['3'=>'Участники', '4'=>'Новости', '1'=>'Только название'],
                'default'           => '3',
                'description'       => 'Режим отображения. Возможные значения: 3 — отображать участников сообщества. 1 — отображать только название сообщества. 4 — отображать стену сообщества.'
            ],
            'width' => [
                'title'             => 'Ширина',
                'type'              => 'string',
                'default'           => '220',
                'description'       => 'Ширина блока в пикселах. Минимальное значение: 120. При значении "auto" подстраивается под ширину блока.',
                'placeholder'       => 'Ширина блока в пикселах',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'Поле должно быть пустым (100% ширина) или содержать число!'
            ],
            'color1' => [
                'title'             => 'Цвет фона',
                'type'              => 'string',
                'default'           => 'FFFFFF',
                'description'       => 'Цвет фона виджета в формате RRGGBB',
                'placeholder'       => 'Цвет фона виджета в формате RRGGBB',
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет фона должен быть в формате RRGGBB!'
            ],
            'color2' => [
                'title'             => 'Цвет текста',
                'type'              => 'string',
                'default'           => '000000',
                'description'       => 'Цвет фона виджета в формате RRGGBB',
                'placeholder'       => 'Цвет фона виджета в формате RRGGBB',
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет текста должен быть в формате RRGGBB!'
            ],
            'color3' => [
                'title'             => 'Цвет кнопок',
                'type'              => 'string',
                'default'           => '5E81A8',
                'description'       => 'Цвет фона виджета в формате RRGGBB',
                'placeholder'       => 'Цвет фона виджета в формате RRGGBB',
                'validationPattern' => '^[0-9a-zA-Z]*$',
                'validationMessage' => 'Цвет кнопок должен быть в формате RRGGBB!'
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/alexlit/vkwidgets/assets/css/VkCommentsWidget.css');
    }

}

?>