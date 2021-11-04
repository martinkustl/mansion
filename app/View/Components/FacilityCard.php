<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FacilityCard extends Component
{
    public $name;
    public $imgPath;
    public $description;
    public $imgName;

    /**
     * Create a new component instance.
     * 
     * @param string name
     * @param string imgPath
     * @param string description
     * @param string imgName
     *
     * @return void
     */
    public function __construct(string $name, string $imgPath, string $description, string $imgName)
    {
        //
        $this->name = $name;
        $this->imgPath = $imgPath;
        $this->description = $description;
        $this->imgName = $imgName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.facility-card');
    }
}
