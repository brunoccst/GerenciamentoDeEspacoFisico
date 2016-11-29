@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Turmas</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include('layouts.error')
                        <form class="form-horizontal" role="form" method="POST" action="{{url('course-classes/'.$course_class->id)}}">
                            {{csrf_field()}}
                            <input name="_method" value="PUT" type="hidden">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Número</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="number" value="{{$course_class->number}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Número de Estudantes</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="number_of_students" value="{{$course_class->number_of_students}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-6">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
