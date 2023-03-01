@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Message</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
            <tr>
               <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023 hoge.
@endsection
