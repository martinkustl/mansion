<div class="form-group row">
    {{-- <label for={{$inputId}} class="col-sm-1 col-form-label">{{$labelText}}</label> --}}
    <label for={{$inputId}} rows="5" class="col-sm-1 col-form-label c-review-form--label">{{$labelText}}</label>
    <div class="col-sm-11">
        <textarea class="form-control" id={{$inputId}} name={{$inputName}} rows="5"
                  placeholder={{$placeholder}} required></textarea>
    </div>
</div>
@error($inputName)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
