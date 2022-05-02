<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\app_Menu;

class aside extends Component
{
    public $menu;

    public function __construct($menu)
    {
        $this->menu = (new app_Menu)->list();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aside');
    }
}
