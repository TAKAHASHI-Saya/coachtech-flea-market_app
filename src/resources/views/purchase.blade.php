@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/purchase.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="content__main">
        <div class="content__section">
            <img src="" alt="" class="content__section-image">
            <div class="content__section-detail">
                <h1 class="content__section-title">商品名</h1>
                <div class="content__section-price">
                    <span class="content__section-yen">¥</span>
                    <span class="content__section-value">金額</span>
                </div>
            </div>
        </div>
        <div class="content__section">
            <h2 class="content__section-title">支払い方法</h2>
            <select name="" id="" class="content__section-select">
                <option value="">選択してください</option>
                <option value="">コンビニ払い</option>
                <option value="">カード支払い</option>
            </select>
        </div>
        <div class="content__section">
            <div class="content__section-head">
                <h2 class="content__section-title">配送先</h2>
                <a href="" class="content__section-link">変更する</a>
            </div>
            <div class="content__section-detail">
                <p class="content__section-info">郵便番号</p>
                <p class="content__section-info">住所</p>
                <p class="content__section-info">建物</p>
            </div>
        </div>
    </div>
    <div class="content__sidebar">
        <div class="content__summary">
            <table class="content__table">
                <tr class="content__table-row">
                    <th class="content__table-header">
                        <span class="content__table-heading">商品代金</span>
                        <span class="content__table-heading">支払い方法</span>
                    </th>
                </tr>
                <tr class="content__table-row">
                    <td class="content__table-item">金額の表示</td>
                    <tb class="content__table-item">支払い方法の表示</tb>
                </tr>
            </table>
        </div>
        <div class="content__sidebar-button">
            <button type="submit" class="content__sidebar-submit">購入する</button>
        </div>
    </div>
</div>
@endsection