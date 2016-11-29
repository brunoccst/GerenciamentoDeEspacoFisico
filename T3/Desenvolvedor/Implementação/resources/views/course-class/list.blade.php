@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Turmas sem Alocação</span>
                            <a href="{{url('course-classes/create')}}" class="btn btn-primary btn-sm">Novo</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Número</th>
                            <th>Número de Estudantes</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($courseClassesNotAllocated as $courseClass)
                                <tr>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $courseClass->number }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $courseClass->number_of_students }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align pull-right">
                                            <form action="{{url('course-classes/'.$courseClass->id)}}" method="post">
                                                {{csrf_field()}}
                                                <a href="{{url('course-classes/'.$courseClass->id.'/edit')}}"
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
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Turmas Alocadas</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Número</th>
                            <th>Número de Estudantes</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($courseClassesAllocated as $courseClass)
                                <tr>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $courseClass->number }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ $courseClass->number_of_students }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align pull-right">
                                            <form action="{{url('course-classes/'.$courseClass->id)}}" method="post">
                                                {{csrf_field()}}
                                                <a href="{{url('course-classes/'.$courseClass->id.'/edit')}}"
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
