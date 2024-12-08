@extends('adminlte::page')

@section('title', 'ユーザー編集')

@section('content_header')
    <h1>ユーザー編集</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="メールアドレス">
                        </div>                        

                        <div class="form-group">
                            <label for="password">パスワード</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="パスワード">
                        </div>
                        
                        <div class="checkboxes">
                            通知：
                            <input type="hidden" name="alert_climate" id="alert1" value="0" >
                            <input type="checkbox" name="alert_climate" id="alert1" value="1">
                            <label for="alert1">天候</label>
                            <input type="hidden" name="alert_temperature" id="alert2" value="0">
                            <input type="checkbox" name="alert_temperature" id="alert2" value="2">
                            <label for="alert2">気温</label>
                            <input type="hidden" name="alert_shipping" id="alert3" value="0">
                            <input type="checkbox" name="alert_shipping" id="alert3" value="3">
                            <label for="alert3">出荷</label>
                            <input type="hidden" name="alert_pesticide" id="alert4" value="0">
                            <input type="checkbox" name="alert_pesticide" id="alert4" value="4">
                            <label for="alert4">防除</label>
                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
