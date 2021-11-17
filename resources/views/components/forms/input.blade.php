<div class="form-group row">
    <label for="{{$inputId}}" class="col-12 col-form-label c-input--label">{{$labelText}}</label>
    <div class="col-12 col c-input--div">
        <input type="{{$inputType}}" class="form-control"
               id="{{$inputId}}" name="{{$inputName}}" placeholder="{{$placeholder}}" value="{{$inputValue}}"
            {{$attributes}}>
    </div>
</div>
@error($inputName)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
