<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CommentForm extends Component
{
    public $id; 
    public $style; 
    public function __construct($id,$style)
    {
        $this->id = $id; 
        $this->style = $style; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment-form');
    }
}
