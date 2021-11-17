<?php

namespace App\View\Components;

use Illuminate\View\Component;

//<div class="modal fade" id="deleteEventModal{{$eventId}}" tabindex="-1"
//     aria-labelledby="deleteEventModalTitle"
//     aria-hidden="true"
//     role="dialog">

class CenteredModal extends Component
{
    public $id;
    public $modalLabeledBy;

    /**
     * Vytvoří vycentrovaný modal
     * @param string $labeledBy
     * @param string $id
     *
     *
     * @return void
     */
    public function __construct(string $id, string $labeledBy)
    {
        $this->id = $id;
        $this->labeledBy = $labeledBy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.centered-modal');
    }
}
