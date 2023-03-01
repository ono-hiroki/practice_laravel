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
            @if ($errors->has('name'))
                <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @if ($errors->has('email'))
                <tr><th>ERROR</th><td>{{$errors->first('email')}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
            @if ($errors->has('age'))
                <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>


@endsection

@section('footer')
    copyright 2018 hoge
@endsection
