<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     */
    public $post;
    public function __construct()
    {
        // $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post.index');
    }
}
