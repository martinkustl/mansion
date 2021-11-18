<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteItemModal extends Component
{
    public $modalId;
    public $modalTitleId;
    public $itemId;
    public $modalHeadingText;
    public $modalText;
    public $inputName;
    public $submitBtnText;
    public $formActionUrl;

    /**
     * Komponenta pro potvrzení smazání Itemu
     *
     * @param string $modalId
     * @param string $modalTitleId
     * @param int $itemId
     * @param string $modalHeadingText
     * @param string $modalText
     * @param string $inputName
     * @param string $submitBtnText
     * @param string $formActionUrl
     *
     * @return void
     */
    
    public function __construct(string $modalId, string $modalTitleId, int $itemId, string $modalHeadingText, string $modalText, string $inputName, string $submitBtnText, string $formActionUrl)
    {
        $this->modalId = $modalId;
        $this->modalTitleId = $modalTitleId;
        $this->itemId = $itemId;
        $this->modalHeadingText = $modalHeadingText;
        $this->modalText = $modalText;
        $this->inputName = $inputName;
        $this->submitBtnText = $submitBtnText;
        $this->formActionUrl = $formActionUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-item-modal');
    }
}
