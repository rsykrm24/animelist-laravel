<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth; 

class Navbar extends Component
{
    public $dashboard; 
    public function __construct()
    {
        $this->dashboard = (Auth::user()) ? "Dashboard" : "Login";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
