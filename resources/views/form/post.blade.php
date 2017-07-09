<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label for="type" class="col-md-4 control-label">Tipo</label>

    <div class="col-md-6">
      <select class="form-control" name="type">
          <option value="{{$post->type_id}}">{{$post->type->description or 'Seleccionar'}}</option>
        @foreach($types as $type)
          <option value="{{$type->id}}">{{$type->description}}</option>
        @endforeach
      </select>
        @if ($errors->has('type'))
            <span class="help-block">
                <strong>{{ $errors->first('type') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $post->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('directory') ? ' has-error' : '' }}">
    <label for="directory" class="col-md-4 control-label">Directorio</label>

    <div class="col-md-6">
        <input id="directory" type="text" class="form-control" name="directory" value="{{ $post->directory }}" required autofocus>

        @if ($errors->has('directory'))
            <span class="help-block">
                <strong>{{ $errors->first('directory') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
    <label for="link" class="col-md-4 control-label">link</label>

    <div class="col-md-6">
        <input id="link" type="text" class="form-control" name="link" value="{{ $post->link }}" required autofocus>

        @if ($errors->has('link'))
            <span class="help-block">
                <strong>{{ $errors->first('link') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </div>
</div>
