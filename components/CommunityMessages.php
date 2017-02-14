<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class CommunityMessages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('alexlit.vkwidgets::lang.communitymessages.name'),
            'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'communityId'     => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.communityid.title'),
                'type'        => 'string',
                'default'     => '127607773',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.communityid.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.communitymessages.communityid.placeholder')
            ],
            'position'        => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.position.title'),
                'type'        => 'dropdown',
                'options'     => [
                    'left'    => Lang::get('alexlit.vkwidgets::lang.communitymessages.position.options.left'),
                    'right'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.position.options.right')
                ],
                'default'     => 'right',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.position.description')
            ],
            'expandIn'        => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.title'),
                'type'        => 'dropdown',
                'options'     => [
                    '0'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.0'),
                    '1'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.1'),
                    '5000'    => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.5000'),
                    '10000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.10000'),
                    '15000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.15000'),
                    '30000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.30000'),
                    '40000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.40000'),
                    '50000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.50000'),
                    '60000'   => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.60000'),
                    '120000'  => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.options.120000')
                ],
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.expandin.description')
            ],
            'openWithSound'   => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.openwithsound.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.openwithsound.description')
            ],
            'newMessageSound' => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.newmessagesound.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.newmessagesound.description')
            ],
            'tooltip'         => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltip.title'),
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltip.description')
            ],
            'tooltipText'     => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltiptext.title'),
                'type'        => 'string',
                'default'     => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltiptext.default'),
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltiptext.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.communitymessages.tooltiptext.placeholder')
            ],
            'elementId'      => [
                'title'       => Lang::get('alexlit.vkwidgets::lang.communitymessages.elementid.title'),
                'type'        => 'string',
                'default'     => 'vk_community_messages',
                'description' => Lang::get('alexlit.vkwidgets::lang.communitymessages.elementid.description'),
                'placeholder' => Lang::get('alexlit.vkwidgets::lang.communitymessages.elementid.placeholder')
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>