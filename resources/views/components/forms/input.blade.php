<div class="form-group row">
    <label for={{$inputId}} class="col-form-label c-input--label">{{$labelText}}</label>
    <div class="col c-input--div">
        <input type={{$inputType}} class="form-control"
               id={{$inputId}} name={{$inputName}} placeholder={{$placeholder}}>
    </div>
</div>
@error($inputName)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
