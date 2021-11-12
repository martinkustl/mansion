<div class="form-group row">
    <label for={{$inputId}} class="col-sm-3 col-form-label c-review-form--label">{{$labelText}}</label>
    <div class="col-sm-9">
        <input type={{$inputType}} class="form-control"
               id={{$inputId}} name={{$inputName}} placeholder={{$placeholder}}>
    </div>
</div>
@error($inputName)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
