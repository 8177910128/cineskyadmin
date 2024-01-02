<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label class="form-label" for="basic-addon-name"> Channel Name</label>
            <input type="text" id="basic-addon-name" name="name" class="form-control" placeholder="Channel Name" value="{{(isset($model->name))?$model->name:old('name')}}" aria-describedby="basic-addon-name" />
            <div class="valid-feedback">Looks good!</div>
            @error('name')
            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror

        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="form-label" for="basic-default-email1">Photo</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo" />
                <label class="custom-file-label" for="customFile1">Choose profile pic</label>
            </div>
            <div class="valid-feedback">Looks good!</div>

            @if((isset($model->image)))
            <div class="clear" style="margin-top: 10px;">
            <img src="{{ url('storage/app/' . $model->image) }}" width="30%" style="border:1px solid rgb(212, 206, 206);">
            </div>
            @endif

        </div>
    </div>



