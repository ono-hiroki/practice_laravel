@extends('layouts.helloapp')
<style>
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block; }
    tr th a:link { color:white; }
    tr th a:visited { color:white; }
    tr th a:hover { color:white; }
    tr th a:active { color:white; }
    tr th { background-color:#999; color:white; padding:5px 20px; }
    tr td { border: solid 1px #aaa; color:#999; padding:5px 20px; }
</style>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@section('title', 'Hello/Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])
    <p>これは、
        <middleware>google.com</middleware>
        へのリンクです。
    </p>
    <p>これは、
        <middleware>yahoo.co.jp</middleware>
        へのリンクです。
    </p>
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            @if ($errors->has('msg'))
                <tr>
                    <th>ERROR</th>
                    <td>{{$errors->first('msg')}}</td>
                </tr>
            @endif
            <tr>
                <th>Message:</th>
                <td><input type="text" name="msg" value="{{old('msg')}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>

    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}

    <table>
        <tr>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">Mail</a></th>
            <th><a href="/hello?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
    copyright 2018 hoge
@endsection
