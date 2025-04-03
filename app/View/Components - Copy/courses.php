<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class courses extends Component
{
    public $course_statuscode, $course_data;
    /**
     * Create a new component instance.
     */
    public function __construct($course_statuscode, $course_data)
    {
        $this->course_statuscode = $course_statuscode;
        $this->course_data = $course_data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses');
    }
}
