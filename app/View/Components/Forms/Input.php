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
    public $inputValue;

    /**
     * Create a new component instance.
     * @param string $labelText
     * @param string $inputId
     * @param string $placeholder
     * @param string $inputName
     * @param string $inputType
     * @param string|int $inputValue
     *
     * @return void
     */
    public function __construct(string $labelText, string $inputId, string $placeholder, string $inputName, string $inputType, $inputValue = '')
    {
        $this->labelText = $labelText;
        $this->inputId = $inputId;
        $this->placeholder = $placeholder;
        $this->inputName = $inputName;
        $this->inputType = $inputType;
        $this->inputValue = $inputValue;
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
