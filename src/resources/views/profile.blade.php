@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="content__header">
        <div class="content__header-group">
            <img src="" alt="" class="content__header-image">
            <h1 class="content__header-heading">ユーザー名</h1>
        </div>
        <a href="" class="content__header-link">プロフィールを編集</a>
    </div>
    <div class="content__tab">
        <a href="" class="content__tab-label {{$activeTab === 'sell' ? 'is-active' : ''}}">出品した商品</a>
        <a href="" class="content__tab-label {{$activeTab === 'purchase' ? 'is-active' : ''}}">購入した商品</a>
    </div>

    <!-- 出品した商品の表示 -->
     @if($activeTab === 'sell')
    <div class="content__inner">
        *出品した商品の一覧を表示する
        @foreach($products as $product)
        <div class="content__inner-group">
            <a href="{{route('detail', ['item_id' => $product->id])}}" class="content__inner-link">
                <img src="{{asset('storage/' . $product->product_image)}}" alt="商品画像" class="content__inner-image">
                <p class="content__inner-text">
                    {{$product->product_name}}
                </p>
            </a>
        </div>
        @endforeach
    </div>
    @endif

    <!-- 購入した商品の表示 -->
     ＊購入した商品の一覧を表示する
     @if($activeTab === 'purchase')
        @auth
            @if($myListProducts->isEmpty())
                <p>マイリストに商品がありません</p>
            @else
                <div class="content__inner">
                    @foreach($myListProducts as $product)
                    <div class="content__inner-group">
                    <a href="{{route('detail', ['item_id' => $product->id])}}" class="content__inner-link">
                    <img src="{{asset('storage/' . $product->product_image)}}" alt="商品画像" class="content__inner-image">
                    <p class="content__inner-text">
                    {{$product->product_name}}
                    </p>
                    </a>
                    </div>
                    @endforeach
                </div>
            @endif
        @else
        <!-- 未認証時は非表示 -->
        @endauth
    @endif
</div>
@endsection