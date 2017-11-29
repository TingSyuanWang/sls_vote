@extends('layouts.app')

@section('title')
500 伺服器錯誤
@endsection

@section('content')
    <div class="row mt-3">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3">500 Facebook 授權失敗</h1>
                <p class="lead">請確認您在登入時，是否正確點擊授權 Facebook，點下面的按鈕回到首頁再試一次。</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('homepage')}}" role="button">回到首頁</a>
                </p>
            </div>
        </div>
    </div>

@stop