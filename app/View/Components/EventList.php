<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventList extends Component
{

    public $events;
    public $basePath;
    /**
     * Create a new component instance.
     *  
     * @param object $events
     * @param string $basePath
     * @return void
     */
    public function __construct(object $events, string $basePath)
    {
        $this->events = $events;
        $this->basePath = $basePath;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.event-list');
    }
}
