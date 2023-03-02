@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Male</th>
            <th>Age</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    @if($item->board != null)
                        {{$item->board->getData()}}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
