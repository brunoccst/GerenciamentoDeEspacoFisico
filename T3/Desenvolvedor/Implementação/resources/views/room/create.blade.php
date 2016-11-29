@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Salas</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include('layouts.error')
                        <form class="form-horizontal" role="form" method="POST" action="{{url('rooms')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Número</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="number" value="{{old('number')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Capacidade</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="capacity" value="{{old('capacity')}}">
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
