@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts <a href="/home" class="pull-right">Return</a></div>
                <div class="panel-body">
                  <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Type</th>
                         <th>Name</th>
                         <th>Directory</th>
                         <th>Link</th>
                         <th>Opcion</th>
                       </tr>
                     </thead>
                     <tbody>
                         @foreach($posts as $post)
                          <tr>
                          <td>{{$post->id}}</td>
                            <td>{{$post->type->description}}</td>
                          <td>{{$post->name}}</td>
                          <td>{{$post->directory}}</td>
                          <td>{{$post->link}}</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Opcion
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" href="/post/edit/{{$post->id}}">Actualizar</a></li>
                                <li role="presentation"><a role="menuitem" href="/posts/{{$post->id}}">Detalle</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation">
                                  <form class="" action="{{route('deletepost',$post->id)}}" method="post">
                                      {{ csrf_field() }}
                                    <input  class="btn btn-danger btn-block" type="submit" name="eliminar" value="Eliminar">
                                  </form>
                                </li>
                              </ul>
                            </div>
                          </td>

                          </tr>
                         @endforeach
                     </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
