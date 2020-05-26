@extends('layouts.layout')

@section('content')
<div class="usershowPage">
    <div class="container">
        <header class="header">
            <p class="header_logo">
                <a href="{{ route('home') }}">
                    <img src="/storage/images/laravel-match-icon.png">
                </a>
            </p>
        </header>
        <div class="userInfo">
            <div class="userInfo_img">
                <img src="/storage/images/{{ $user->img_name }}">
            </div>
            <div class="userInfo_name">{{ $user->name }}</div>
            <div class="userInfo_selfIntroduction">{{ $user->self_introduction }}</div>
        </div>
        @if(Auth::user()->id === $user->id)
        <div class="userAction">
            <div class="userAction_edit userAction_common">
                <a href="{{ route('users.edit', ['user' => $user->id]) }}"><i class="fas fa-edit fa-2x"></i><span>情報を編集</span></a>
            </div>
            <div class="userAction_logout userAction_common">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-cog fa-2x"></i>
                    <span>ログアウト</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
