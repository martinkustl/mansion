<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $labelText;
    public $showLabel;
    public $inputId;
    public $placeholder;
    public $inputName;
    public $inputValue;

    /**
     * Create a new component instance.
     *
     * @param string $labelText
     * @param string $inputId
     * @param string $placeholder
     * @param string $inputName
     * @param string $inputValue
     * @param boolean $showLabel
     *
     * @return void
     */

    public function __construct(string $labelText, string $inputId, string $placeholder, string $inputName, string $inputValue = '', bool $showLabel = true)
    {
        $this->labelText = $labelText;
        $this->inputId = $inputId;
        $this->placeholder = $placeholder;
        $this->inputName = $inputName;
        $this->inputValue = $inputValue;
        $this->showLabel = $showLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.text-area');
    }
}
