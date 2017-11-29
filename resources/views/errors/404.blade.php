@extends('layouts.app')

@section('title')
404 找不到頁面
@endsection

@section('content')
    <div class="row mt-3">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3">404 找不到頁面</h1>
                <p class="lead">此頁面找不到，請確定網址無誤，點下面的按鈕回到首頁再試一次。</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('homepage')}}" role="button">回到首頁</a>
                </p>
            </div>
        </div>
    </div>
@endsection