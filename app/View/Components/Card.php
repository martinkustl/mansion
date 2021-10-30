<?php

namespace App\View\Components;

use Illuminate\View\Component;
use PhpParser\Node\Scalar\String_;

class Card extends Component
{
    public $title;
    public $description;
    public $date;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param  string  $description
     * @param  string  $date
     * @return void
     */
    public function __construct(string $title, string $description, string $date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
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


//  public $type;
// public $message;

// public function __construct($type, $message)
// {
//     $this->type = $type;
//     $this->message = $message;
// }