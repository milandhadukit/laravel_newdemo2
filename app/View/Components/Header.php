<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $fruits = "";
    public $name="";

  
    public function __construct($fruits,$name)
    {
        // $this->title = $title;
        $this->name=$name;
        $this->fruits = $fruits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
    
    
}
