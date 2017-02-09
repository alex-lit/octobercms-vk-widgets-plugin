<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Comments extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Комментарии',
            'description' => 'Виджет предоставляет возможность за несколько минут установить на сайт полнофункциональный блок для комментирования.'
        ];
    }

    public function defineProperties()
    {
        return [
            'apiId'                 => [
                'title'             => 'Open API ID',
                'type'              => 'string',
                'default'           => '3631946',
                'description'       => 'Ваш API ID',
                'placeholder'       => 'API ID',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Open API ID должен быть числом!'
            ],
            'width'                 => [
                'title'             => 'Ширина блока в пикселах',
                'type'              => 'string',
                'default'           => '',
                'description'       => 'Минимальное значение: 300. Если параметр не указан, виджет займет всю доступную ширину',
                'placeholder'       => 'Width',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'Ширина блока должен быть числом!'
            ],
            'height'                => [
                'title'             => 'Высота блока в пикселах',
                'type'              => 'string',
                'default'           => '0',
                'description'       => 'Минимальное значение: 500. Если height = 0, то высота не ограничена. Если высота содержимого виджета больше максимально допустимой, появляется внутренняя прокрутка',
                'placeholder'       => 'Height',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'Высота блока должен быть числом!'
            ],
            'limit'                 => [
                'title'             => 'Возможные типы вложений',
                'type'              => 'string',
                'default'           => '10',
                'description'       => 'Минимальное значение: 5, максимальное значение: 100',
                'placeholder'       => 'Limit',
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'Число комментариев должно быть числом!'
            ],
            'attach'                => [
                'title'             => 'Возможные типы вложений',
                'type'              => 'string',
                'default'           => '*',
                'description'       => 'Определяет состав меню «Прикрепить». Строка, содержащая перечисленные через запятую типы допустимых прикреплений либо false в случае отключения этой функции. Возможные типы: graffiti, photo, audio, video, link. Значение "*" включает все типы',
                'placeholder'       => 'graffiti, photo, audio, video, link, *'
            ],
            'autoPublish'           => [
                'title'             => 'Aвтоматическая публикация',
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => 'Aвтоматическая публикация комментария на странице пользователя'
            ],
            'mini'                  => [
                'title'             => 'Минималистичный вид блока',
                'type'              => 'dropdown',
                'options'           => [
                    '0'             => 'отключен',
                    '1'             => 'включен',
                    'auto'          => 'автоматически'
                ],

                'default'           => 'auto',
                'description'       => 'Уменьшенный шрифт, уменьшенные миниатюры прикреплений, уменьшенные профильные изображения для комментариев второго уровня'
            ],
            'norealtime'            => [
                'title'             => 'Real-time обновление комментариев',
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => 'Обновление ленты комментариев в режиме реального времени'
            ],
            'pageUrl'               => [
                'title'             => 'URL страницы',
                'type'              => 'string',
                'default'           => '',
                'description'       => 'URL страницы, ссылка на которую будет прикреплена к комментарию при его публикации на странице ВКонтакте (опционально)',
                'placeholder'       => 'http://site.com'
            ],
            'elementId'             => [
                'title'             => 'ID виджета',
                'type'              => 'string',
                'default'           => 'vk_comments',
                'description'       => 'id элемента, который будет являться контейнером для блока комментариев',
                'placeholder'       => 'ID'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>