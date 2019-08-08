<?php
namespace Dizoo\Slider\components;

use Cms\Classes\ComponentBase;
use Dizoo\Slider\Models\Slides as Slides;

class Slider extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Slider',
            'description' => 'Displays the slider on the page.'
        ];
    }

    public function onRun()
    {
        $slides = $this->getSlides();
        if($slides->count()) {
            $this->page['slides'] = $slides;
            if($this->property('bootstrap')) {
                $this->addCss('/plugins/dizoo/slider/assets/css/bootstrap.min.css');
            }
            $this->addCss('/plugins/dizoo/slider/assets/css/owl.carousel.min.css');
            $this->addCss('/plugins/dizoo/slider/assets/css/owl.theme.min.css');
            $this->addCss('/plugins/dizoo/slider/assets/css/custom-slider.css');
            $this->addJs('/plugins/dizoo/slider/assets/js/owl.carousel.min.js');
            $this->addJs('/plugins/dizoo/slider/assets/js/start-slider.js');
        } else {
            $this->page['slides'] = false;
        }

    }

    public function getSlides()
    {
        return Slides::where('active', true)->orderBy('sort_order', 'ASC')->get();
    }
    
    public function defineProperties()
    {
        return [
            'autoplay' => [
                 'title'             => 'Autoplay',
                 'description'       => 'Slide automatically',
                 'default'           => true,
                 'type'              => 'checkbox'
            ],
            'loop' => [
                 'title'             => 'Loop',
                 'description'       => 'Loop slides',
                 'default'           => true,
                 'type'              => 'checkbox'
            ],
            'bootstrap' => [
                'title'             => 'Include Bootstrap',
                'description'       => 'If your theme already uses bootstrap (v3.3.7+) uncheck this box',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }
}