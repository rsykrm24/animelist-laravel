<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $animeTitle; 
    public $animeImage; 
    public $id; 
    public function __construct($animeTitle,$animeImage,$id)
    {
        $this->animeImage = $animeImage; 
        $this->animeTitle = $animeTitle; 
        $this->id = $id; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
