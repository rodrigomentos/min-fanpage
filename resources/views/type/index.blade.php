@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Types <a href="/home" class="pull-right">Return</a></div>
                <div class="panel-body">
                  <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Description</th>
                         <th>Opcion</th>
                       </tr>
                     </thead>
                     <tbody>
                         @foreach($types as $type)
                          <tr>
                          <td>{{$type->id}}</td>
                          <td>{{$type->description}}</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Opcion
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" href="/type/edit/{{$type->id}}">Actualizar</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation">
                                  <form class="" action="{{route('deletetype',$type->id)}}" method="post">
                                      {{ csrf_field() }}
                                    <input  class="btn btn-danger btn-block" type="submit" name="eliminar" value="Eliminar">
                                  </form>
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
