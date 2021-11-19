@extends ('layouts.page')

@section('title')
    Recenze
@endsection

@section('content')

@section('pageHeading')
    Říkají o nás
@endsection

<form class="c-review-form p-4" method="POST" action="/reviews">
    @method('POST')
    @csrf
    <h3 class="c-review-form--heading">Vložte vlastní recenzi</h3>
    <x-forms.input inputType="text" labelText="Jméno" placeholder="Jméno" inputId="name" inputName="name" required/>
    <x-forms.text-area labelText="Recenze" placeholder="Recenze" inputId="review" inputName="review" required/>
    <div class="row align-items-center justify-content-between">
        <div class="col-md-6">
            {{--  TODO - zlepšit validaci ratingu - neukáže se error message na clientovi          --}}
            <div class="rating">
                <label>
                    <input class="rating-input" type="radio" name="rating" value="5" title="5 stars" required> 5
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="4" title="4 stars" required> 4
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="3" title="3 stars" required> 3
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="2" title="2 stars" required> 2
                </label>
                <label>
                    <input class="rating-input" type="radio" name="rating" value="1" title="1 star" required> 1
                </label>
            </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
            <button type="submit"
                    class="btn btn-primary c-btn-primary float-md-end text-capitalize c-review-form--submit">odeslat
            </button>
        </div>
    </div>
    @error('rating')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>
<hr class="c-review-hr"/>
<ul class="c-review-list">
    @foreach ($reviews as $review)
        <li>
            <x-review :name="$review->name" :review="$review->review" :rating="$review->rating"
                      :createdAt="format_datetime($review->createdAt)"
                      :answeredAt="format_datetime($review->answeredAt)"
                      :answer="$review->answer"
                      :id="$review->id"
            />
        </li>
    @endforeach
</ul>


@endsection
