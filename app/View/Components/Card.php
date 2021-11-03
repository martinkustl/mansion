<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $description;
    public $date;
    public $path;
    public $name;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param  string  $description
     * @param  string  $date
     * @param  string  $path
     * @param  string  $name
     * 
     * @return void
     */
    public function __construct(string $title, string $description, string $date, string $path, string $name)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->path = $path;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
