@extends('adminlte::page')

@section('title', 'ユーザー一覧')

@section('content_header')
    <h1>ユーザー一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ユーザー一覧</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ url('items/edit') }}" class="btn btn-primary">ユーザー編集</a>
                                <a href="{{ route('logout.and.register') }}" class="btn btn-primary">ユーザー新規登録</a>
                                <a href="{{ url('items/add') }}" class="btn btn-primary">商品登録</a>
                                <a href="{{ url('items') }}" class="btn btn-primary">商品一覧</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>メールアドレス</th>
                                <th>天候</th>
                                <th>気温</th>
                                <th>出荷</th>
                                <th>防除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->alert_climate }}</td>
                                    <td>{{ $user->alert_temperature }}</td>
                                    <td>{{ $user->alert_shipping }}</td>
                                    <td>{{ $user->alert_pesticide }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
