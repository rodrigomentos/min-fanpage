@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tipo Post <a href="/types" class="pull-right">List</a></div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('typecreate') }}">
                      {{ csrf_field() }}
                        @include('form.type')

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Post <a href="/posts" class="pull-right">List</a></div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('postcreate') }}">
                      {{ csrf_field() }}
                      @include('form.post')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle Post </div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('detailpostcreate') }}">
                      {{ csrf_field() }}
                      @include('form.detail')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
