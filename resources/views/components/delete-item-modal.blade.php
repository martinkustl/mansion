<x-centered-modal id="{{$modalId}}" labeled-by="{{$modalTitleId}}">
    <div class="modal-header d-flex justify-content-center">
        <h3 class="modal-title text-center" id="{{$modalTitleId}}">{{$modalHeadingText}}</h3>
    </div>
    <form method="POST" action="{{$formActionUrl}}">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            <p>{{$modalText}}</p>
            <input value="{{$itemId}}" name="eventId" type="hidden">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Zavřít
            </button>
            <input type="submit" class="btn btn-primary c-btn-primary" value="{{$submitBtnText}}">
        </div>
    </form>
</x-centered-modal>
