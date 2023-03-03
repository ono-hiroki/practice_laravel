<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $user = Auth::user();
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }

//        $sort = $request->sort;
        if ($request->has('sort')) {
            $sort = $request->sort;
            $request->session()->put('sort', $sort);
        } elseif ($request->session()->has('sort')) {
            $sort = $request->session()->get('sort');
        } else {
            $sort = 'id';
        }

        $items = Person::orderBy($sort, 'asc')->Paginate(5);

        return view('hello.index', ['msg' => $msg, 'items' => $items, 'sort' => $sort, 'user' => $user]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg' => '「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);

        return $response;
    }

    public function reset(Request $request)
    {
        return view('hello.reset');
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}
