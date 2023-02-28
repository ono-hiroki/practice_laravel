@extends('layouts.helloapp')

@section('title', 'Hello/Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    {{--    @component('components.message')--}}
    {{--        @slot('msg_title')--}}
    {{--            CAUTION!--}}
    {{--        @endslot--}}

    {{--        @slot('msg_content')--}}
    {{--            これはメッセージの表示です。--}}
    {{--        @endslot--}}
    {{--    @endcomponent--}}
    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])
    @each('components.item', $data, 'item')
    <p>Controller value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
    copylight 2018 hoge
@endsection
