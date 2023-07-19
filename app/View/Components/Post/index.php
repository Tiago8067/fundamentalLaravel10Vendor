<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class index extends Component
{
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }
    /* public function __construct($post)
    {
        $this->post = $post;
    } */

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post.index');
    }
}
