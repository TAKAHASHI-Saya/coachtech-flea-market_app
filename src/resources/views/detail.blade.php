@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="content__image">
        <img src="" alt="商品画像" class="content__image-img">
    </div>
    <div class="content__inner">
        <div class="content__inner-group">
            <h1 class="content__inner-title">商品名がここに入る</h1>
            <p class="content__inner-brand">ブランド名</p>
            <div class="content__inner-price">
                <span class="content__inner-yen">¥</span>
                <span class="content__inner-value">値段</span>
                <span class="content__inner-tax">（税込）</span>
            </div>
        </div>
    </div>
</div>
@endsection