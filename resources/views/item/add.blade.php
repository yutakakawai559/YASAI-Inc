@extends('adminlte::page')

@section('title', '出荷物登録')

@section('content_header')
    <h1>出荷物登録</h1>
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
                            <label for="name">品目名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="品目名">
                        </div>

                        <div class="form-group">
                            <label for="type">出荷先</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="出荷先">
                        </div>                        

                        <div class="form-group">
                            <label for="detail">収穫圃場</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="収穫圃場">
                        </div>
                        
                        <div class="form-group">
                            <label for="StartDate">収穫開始日</label>
                            <input type="date" class="form-control" id="StartDate" name="StartDate" placeholder="開始日">
                        </div>

                        <div class="form-group">
                            <label for="ScheduledEndDate">収穫終了予定日</label>
                            <input type="date" class="form-control" id="ScheduledEndDate" name="ScheduledEndDate" placeholder="終了予定日">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
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
