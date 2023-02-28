@extends('layouts.helloapp')

@section('title', 'Hello/Index')

@section('menubar')
    @parent
    インデックスページ

@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
    copylight 2018 hoge
@endsection
