@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Disciplinas</span>
                            <a href="{{url('disciplines/create')}}" class="btn btn-primary btn-sm">Novo</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Nome</th>
                            <th>Início</th>
                            <th>Término</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($disciplines as $discipline)
                                <tr>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $discipline->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $discipline->starts_at }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $discipline->ends_at }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align pull-right">
                                            <form action="{{url('disciplines/'.$discipline->id)}}" method="post">
                                                {{csrf_field()}}
                                                <a href="{{url('disciplines/'.$discipline->id.'/edit')}}"
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
