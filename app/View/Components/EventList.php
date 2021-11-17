<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EventList extends Component
{

    public $events;
    public $basePath;
    public $isEditable;

    /**
     * Create a new component instance.
     *
     * @param object $events
     * @param string $basePath
     * @param bool $isEditable
     * @return void
     */
    public function __construct(object $events, string $basePath, bool $isEditable = false)
    {
        $this->events = $events;
        $this->basePath = $basePath;
        $this->isEditable = $isEditable;
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
