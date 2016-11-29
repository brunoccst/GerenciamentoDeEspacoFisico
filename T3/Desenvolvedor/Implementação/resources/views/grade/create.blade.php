@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Grades</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include('layouts.error')
                        <form class="form-horizontal" role="form" method="POST" action="{{url('grades')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Disciplina</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="discipline_id">
                                        @foreach($disciplines as $discipline)
                                            <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sala</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="room_id">
                                        @foreach($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Turma</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="course_class_id">
                                        @foreach($courseClasses as $courseClass)
                                            <option value="{{$courseClass->id}}">{{$courseClass->number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Início</label>
                                <div class="col-md-6">
                                    <input type="datetime" class="form-control" name="starts_at">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Término</label>
                                <div class="col-md-6">
                                    <input type="datetime" class="form-control" name="ends_at">
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
