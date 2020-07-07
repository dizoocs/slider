<?php namespace Dizoo\Slider;

use Dizoo\Slider\Components\Slider;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            Slider::class       => 'slider'
        ];
    }

    public function registerSettings()
    {
    }
}
