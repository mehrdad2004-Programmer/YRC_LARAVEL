<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class communities extends Component
{

    public $source,$title,$code;
    /**
     * Create a new component instance.
     */
    public function __construct($source, $title, $code)
    {
        $this->source = $source;
        $this->title = $title;
        $this->code = $code;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.communities');
    }
}
