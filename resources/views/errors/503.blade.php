@extends('layouts.app')

@section('title')
503 服務發生錯誤
@endsection

@section('content')
    <div class="row mt-3">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3">503 服務發生錯誤</h1>
                <p class="lead">服務發生錯誤，請聯繫系統管理員，或是點擊下方回到首頁再試一次。</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('homepage')}}" role="button">回到首頁</a>
                </p>
            </div>
        </div>
    </div>

@stop