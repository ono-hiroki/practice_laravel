<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachico@happy'],
        ];
        return view('hello.index', ['data' => $data,'message' => 'Hello!',]);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}
