<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Comments extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.comments.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.comments.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'apiId'                 => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.apiId.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.apiId.description'),
                'placeholder'       => 'API ID',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.comments.apiId.validationMessage')
            ],
            'limit'                 => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.limit.title'),
                'type'              => 'string',
                'default'           => '10',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.limit.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.comments.limit.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.comments.limit.validationMessage')
            ],
            'attach'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.attach.title'),
                'type'              => 'string',
                'default'           => '*',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.attach.description'),
                'placeholder'       => 'graffiti, photo, audio, video, link, *'
            ],
            'width'                 => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.width.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.width.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.comments.width.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.comments.width.validationMessage')
            ],
            'height'                => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.height.title'),
                'type'              => 'string',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.height.description'),
                'placeholder'       => Lang::get('alexlit.vkwidgets::lang.comments.height.placeholder'),
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => Lang::get('alexlit.vkwidgets::lang.comments.height.validationMessage'),
                'group'             => Lang::get('alexlit.vkwidgets::lang.comments.height.group')
            ],
            'autoPublish'           => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.autoPublish.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.autoPublish.title'),
                'group'             => Lang::get('alexlit.vkwidgets::lang.comments.autoPublish.group')
            ],
            'mini'                  => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.mini.title'),
                'type'              => 'dropdown',
                'options'           => [
                    '0'             => Lang::get('alexlit.vkwidgets::lang.comments.mini.options.0'),
                    '1'             => Lang::get('alexlit.vkwidgets::lang.comments.mini.options.1'),
                    'auto'          => Lang::get('alexlit.vkwidgets::lang.comments.mini.options.auto')
                ],

                'default'           => 'auto',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.mini.description'),
                'group'             => Lang::get('alexlit.vkwidgets::lang.comments.mini.group')
            ],
            'norealtime'            => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.norealtime.title'),
                'type'              => 'checkbox',
                'default'           => '0',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.norealtime.description'),
                'group'             => Lang::get('alexlit.vkwidgets::lang.comments.norealtime.group')
            ],
            'pageUrl'               => [
                'title'             => Lang::get('alexlit.vkwidgets::lang.comments.pageUrl.title'),
                'type'              => 'string',
                'default'           => '',
                'description'       => Lang::get('alexlit.vkwidgets::lang.comments.pageUrl.description'),
                'placeholder'       => 'http://site.com/test',
                'group'             => Lang::get('alexlit.vkwidgets::lang.comments.pageUrl.group')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>