@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit DetailPosts <a href="/posts/{{$detailpost->post_id}}" class="pull-right">Return</a></div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{route('updatedetailpost',$detailpost->id)}}">
                      {{ csrf_field() }}
                      @include('form.detail')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
