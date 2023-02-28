@extends('layouts.helloapp')

@section('title', 'Hello/Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>



@endsection

@section('footer')
    copyright 2018 hoge
@endsection
