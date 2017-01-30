<?php namespace AlexLit\VkWidgets\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class VkCommunityMessages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Community Messages',
            'description' => 'With the help of "Community Messages" widget you can create a fast tool for communication with VK users and add it to your website.'
        ];
    }

    public function defineProperties()
    {
        return [
            'communityId'     => [
                'title'       => 'Page or Group ID',
                'type'        => 'string',
                'default'     => '127607773',
                'description' => 'Community id the widget will be created for',
                'placeholder' => 'ID'
            ],
            'position'        => [
                'title'       => 'Position',
                'type'        => 'dropdown',
                'options'     => [
                    'left'    => 'Bottom left corner',
                    'right'   => 'Bottom right corner'
                ],
                'default'     => 'right',
                'description' => 'Button position (left or right)'
            ],
            'expandIn'        => [
                'title'       => 'Expand in',
                'type'        => 'dropdown',
                'options'     => [
                    '0'       => 'Do not open',
                    '1'       => 'Immediately',
                    '5000'    => '5 seconds',
                    '10000'   => '10 seconds',
                    '15000'   => '15 seconds',
                    '30000'   => '30 seconds',
                    '40000'   => '40 seconds',
                    '50000'   => '50 seconds',
                    '60000'   => '60 seconds',
                    '120000'  => '120 seconds'
                ],
                'default'     => '1',
                'description' => 'Expanding widget'
            ],
            'openWithSound'   => [
                'title'       => 'Open with sound',
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => 'Enable sound when widget is expanding'
            ],
            'newMessageSound' => [
                'title'       => 'New message sound',
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => 'New message notification sound'
            ],
            'tooltip'         => [
                'title'       => 'Tooltip',
                'type'        => 'checkbox',
                'default'     => '1',
                'description' => 'Enable a tooltip'
            ],
            'tooltipText'     => [
                'title'       => 'Tooltip text',
                'type'        => 'string',
                'default'     => 'Any question?',
                'description' => 'Community id the widget will be created for',
                'placeholder' => 'Tooltip text'
            ],
            'element_id'     => [
                'title'       => 'Element ID',
                'type'        => 'string',
                'default'     => 'vk_community_messages',
                'description' => 'Element ID (optional)',
                'placeholder' => 'Element ID'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//vk.com/js/api/openapi.js?139');
    }

}

?>