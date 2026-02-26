@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="content__tab">
        <input type="radio" id = "recommend" name="tabs" {{$activeTab === 'recommend' ? 'checked' : ''}} class="content__tab-input">
        <input type="radio" name="tabs" id="my-list" {{$activeTab === 'my-list' ? 'checked' :''}} class="content__tab-input">
        <label for="recommend" class="content__tab-label">おすすめ</label>
        <label for="my-list" class="content__tab-label">マイリスト</label>
    </div>
    <!-- おすすめ商品の表示 -->
    <div class="content__inner">
        <div class="content__inner-group">
            <img src="" alt="商品画像" class="content__inner-image">
            <p class="content__inner-text">商品名</p>
        </div>
    </div>
    <!-- マイリストの表示 -->
    <div class="content__inner">
        <div class="content__inner-group">
            <img src="" alt="商品画像" class="content__inner-image">
            <p class="content__inner-text">商品名</p>
        </div>
    </div>
</div>
@endsection

