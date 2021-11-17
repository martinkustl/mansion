<div class="form-group row">
    {{-- <label for={{$inputId}} class="col-sm-1 col-form-label">{{$labelText}}</label> --}}
    <label for="{{$inputId}}" class="col-12 c-input--label col-form-label c-review-form--label">{{$labelText}}</label>
    <div class="col-12 c-input--div">
        <textarea class="form-control" id="{{$inputId}}" name="{{$inputName}}" rows="5"
                  placeholder="{{$placeholder}}" {{$attributes}}>{{$inputValue}}</textarea>
    </div>
</div>
@error($inputName)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
