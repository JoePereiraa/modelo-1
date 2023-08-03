<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BtnWhatsapp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $style;
    public $icon;
    public $title;

    public function __construct($style,$icon,$title)
    {
        $this->style = $style;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.btn-whatsapp');
    }
}
