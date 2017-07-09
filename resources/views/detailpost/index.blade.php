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
                         <th>Post</th>
                          <th>Name</th>
                         <th>Directory</th>
                         <th>Opcion</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($detailposts as $detailpost)
                           @foreach($detailpost->detailpost as $detail)
                          <tr>
                            <td>{{$detail->id}}</td>
                            <td>{{$detailpost->name}}</td>
                            <td>{{$detail->name}}</td>
                            <td>{{$detail->link}}</td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Opcion
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                  <li role="presentation"><a role="menuitem" href="/detailpost/edit/{{$detail->id}}">Actualizar</a></li>
                                  <li role="presentation" class="divider"></li>
                                  <li role="presentation">
                                    <form class="" action="{{route('deletedetailpost',$detail->id)}}" method="post">
                                        {{ csrf_field() }}
                                      <input  class="btn btn-danger btn-block" type="submit" name="eliminar" value="Eliminar">
                                    </form>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                      @endforeach
                     </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
