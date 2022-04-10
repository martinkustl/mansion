<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventCard extends Component
{
    public $title;
    public $description;
    public $date;
    public $imgPath;
    public $imgName;
    public $eventId;
    public $basePath;
    public $isEditable;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $description
     * @param string $date
     * @param string $imgPath
     * @param string $imgName
     * @param int $eventId
     * @param string $basePath
     * @param bool $isEditable
     *
     */
    public function __construct(
        string $title, string $description, string $date, string $imgPath, string $imgName, int $eventId, string $basePath, bool $isEditable = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->imgPath = $imgPath;
        $this->imgName = $imgName;
        $this->eventId = $eventId;
        $this->basePath = $basePath;
        $this->isEditable = $isEditable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.event-card');
    }
}
