@extends ('layouts.page')

@section('title')
    Recenze
@endsection

@section('content')

@section('pageHeading')
    Říkají o nás
@endsection

<form class="c-review-form p-4" method="POST" action="/reviews">
    @csrf
    <h3 class="c-review-form--heading">Vložte vlastní recenzi</h3>
    <x-forms.text-input labelText="Jméno" placeholder="Jméno" inputId="name" inputName="name"/>
    <x-forms.text-area labelText="Recenze" placeholder="Recenze" inputId="review" inputName="review"/>
    <div class="row align-items-center justify-content-between">
        <div class="col-md-6">
            <div class="rating">
                <label>
                    <input class="rating-input" type="radio" name="rating" value="5" title="5 stars"> 5
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="4" title="4 stars"> 4
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="3" title="3 stars"> 3
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="2" title="2 stars"> 2
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="1" title="1 star"> 1
                </label>
            </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
            <button type="submit" class="btn btn-primary c-review-form--submit float-md-end">odeslat
            </button>
        </div>
        {{--        <div class="col-6">test</div>--}}
    </div>
</form>
@endsection
