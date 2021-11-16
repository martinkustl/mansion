<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    public $btnText;

    /**
     * Submit button component
     *
     * @param string $btnText
     *
     *
     * @return void
     */
    public function __construct(string $btnText)
    {
        $this->btnText = $btnText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.submit-button');
    }
}
