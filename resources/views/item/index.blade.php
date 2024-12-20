@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">商品一覧</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ route('logout.and.register') }}" class="btn btn-primary">ユーザー新規登録</a>
                                <a href="{{ url('items/users') }}" class="btn btn-primary">ユーザー一覧</a>
                                <a href="{{ url('items/add') }}" class="btn btn-primary">商品登録</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>品目名</th>
                                <th>出荷先</th>
                                <th>収穫圃場</th>
                                <th>収穫開始日</th>
                                <th>収穫終了予定日</th>
                                <th>削除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->detail }}</td>
                                    <td>{{ $item->StartDay }}</td>
                                    <td>{{ $item->ScheduledEndDay }}</td>
                                    <td>
                                        <form action="{{ url('items/delete') }}" method="POST" onsubmit="return confirm('削除します。よろしいですか？');">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="submit" value="削除" class="btn btn-danger">
                                        </form>
                                    </td>
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
