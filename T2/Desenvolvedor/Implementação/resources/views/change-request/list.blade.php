@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Salas</span>
                            <a href="{{url('rooms/create')}}" class="btn btn-primary btn-sm">Novo</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Nome</th>
                            <th>Capacidade</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $room->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $room->capacity }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align pull-right">
                                            <form action="{{url('rooms/'.$room->id)}}" method="post">
                                                {{csrf_field()}}
                                                <a href="{{url('rooms/'.$room->id.'/edit')}}"
                                                   class="btn btn-primary">
                                                    <i class="fa fa-pencil"></i> Editar
                                                </a>
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-times"></i> Excluír
                                                </button>
                                            </form>
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
