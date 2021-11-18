<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Review extends Component
{
    public $id;
    public $name;
    public $review;
    public $rating;
    public $createdAt;
    public $answer;
    public $answeredAt;

    /**
     * Create a new component instance.
     * @param int $id
     * @param string $name
     * @param string $review
     * @param int $rating
     * @param string $createdAt
     * @param string|null $answer
     * @param string|null $answeredAt
     * @return void
     */
    public function __construct(string $name, string $review, int $rating, string $createdAt, string $answer = null, string $answeredAt = null, int $id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->review = $review;
        $this->rating = $rating;
        $this->createdAt = $createdAt;
        $this->answer = $answer;
        $this->answeredAt = $answeredAt;
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
