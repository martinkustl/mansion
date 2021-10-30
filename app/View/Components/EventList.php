<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventList extends Component
{

    public $events;
    /**
     * Create a new component instance.
     *  
     * @param object $events
     * @return void
     */
    public function __construct(object $events)
    {
        $this->events = $events;
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
