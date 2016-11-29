@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <span>Registros de Atividades</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Usuário</th>
                            <th>Ação</th>
                            <th>Data</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($logActivities as $logActivity)
                                <tr>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ @$logActivity->user->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ @trans('gef.'.$logActivity->method) }}
                                            uma
                                            {{ @trans('gef.'.$logActivity->model) }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-table-align">
                                            {{ @$logActivity->created_at->format('d/m/Y H:i') }}
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
