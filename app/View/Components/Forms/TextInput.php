<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class TextInput extends Component
{

    public $labelText;
    public $inputId;
    public $placeholder;
    public $inputName;
    
    /**
     * Create a new component instance.
     *
     * @param string $labelText
     * @param string $inputId
     * @param string $placeholder
     * @param string $inputName
     *
     * @return void
     */
    public function __construct(string $labelText, string $inputId, string $placeholder, string $inputName)
    {
        $this->labelText = $labelText;
        $this->inputId = $inputId;
        $this->placeholder = $placeholder;
        $this->inputName = $inputName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.text-input');
    }
}
