@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Disciplinas</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include('layouts.error')
                        <form class="form-horizontal" role="form" method="POST" action="{{url('disciplines')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nome</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
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
