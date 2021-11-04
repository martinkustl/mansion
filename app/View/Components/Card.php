<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $description;
    public $date;
    public $imgPath;
    public $imgName;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param  string  $description
     * @param  string  $date
     * @param  string  $imgPath
     * @param  string  $imgName
     * 
     * @return void
     */
    public function __construct(string $title, string $description, string $date, string $imgPath, string $imgName)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->imgPath = $imgPath;
        $this->imgName = $imgName;
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
