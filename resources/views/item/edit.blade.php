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
                    <div class="card-body">
                        <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                <label for="name">名前</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ $user->name}}" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                            </div>                        

                            <div class="checkboxes" style="align-items: center;">
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
                            <button type="submit" class="btn btn-warning">編集</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
