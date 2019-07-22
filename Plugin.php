<?php namespace Dizoo\Slider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Dizoo\Slider\Components\Slider::class       => 'slider'
        ];
    }

    public function registerSettings()
    {
    }
}
