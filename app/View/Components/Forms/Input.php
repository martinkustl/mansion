<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $labelText;
    public $inputId;
    public $placeholder;
    public $inputName;
    public $inputType;

    /**
     * Create a new component instance.
     * @param string $labelText
     * @param string $inputId
     * @param string $placeholder
     * @param string $inputName
     * @param string $inputType
     *
     * @return void
     */
    public function __construct(string $labelText, string $inputId, string $placeholder, string $inputName, string $inputType)
    {
        $this->labelText = $labelText;
        $this->inputId = $inputId;
        $this->placeholder = $placeholder;
        $this->inputName = $inputName;
        $this->inputType = $inputType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
