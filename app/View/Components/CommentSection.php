<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CommentSection extends Component
{
    public $user; 
    public $comment; 
    public function __construct($user,$comment)
    {
        $this->user = $user; 
        $this->comment = $comment; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment-section');
    }
}
