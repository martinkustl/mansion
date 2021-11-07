<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Review extends Component
{
    public $name;
    public $review;
    public $rating;
    public $createdAt;

    /**
     * Create a new component instance.
     * @param string $name
     * @param string $review
     * @param int $rating
     * @param string $createdAt
     *
     *
     * @return void
     */
    public function __construct(string $name, string $review, int $rating, string $createdAt)
    {
        $this->name = $name;
        $this->review = $review;
        $this->rating = $rating;
        $this->createdAt = $createdAt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.review');
    }
}
