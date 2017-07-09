<div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
    <label for="post" class="col-md-4 control-label">Tipo</label>

    <div class="col-md-6">
      <select class="form-control" name="post">
          <option value="{{$detailpost->post_id}}">{{$detailpost->post->name or 'Seleccionar'}}</option>
        @foreach($posts as $post)
          <option value="{{$post->id}}">{{$post->name}}</option>
        @endforeach
      </select>
        @if ($errors->has('post'))
            <span class="help-block">
                <strong>{{ $errors->first('post') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ $detailpost->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
    <label for="link" class="col-md-4 control-label">Directory</label>

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
