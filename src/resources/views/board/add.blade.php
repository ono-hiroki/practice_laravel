@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
@if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
    <table>
        <form action="/board/add" method="post">
        @csrf
        <tr>
            <th>person_id: </th>
            <td><input type="number" name="person_id" value="{{old('person_id')}}"></td>
        </tr>
        <tr>
            <th>title: </th>
            <td><input type="text" name="title" value="{{old('title')}}"></td>
        </tr>
        <tr>
            <th>message: </th>
            <td><input type="text" name="message" value="{{old('message')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2023 hoge.
@endsection
