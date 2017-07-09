@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Post <a href="/posts" class="pull-right">Return</a></div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{route('updatepost',$post->id)}}">
                      {{ csrf_field() }}
                      @include('form.post')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
