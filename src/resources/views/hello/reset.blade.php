<html>
<head>
    <title>hello/Reset</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }

        th {
            background-color: #999;
            color: #fff;
            padding: 5px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<h1>Rest</h1>
<table>
    <form action="/hello/reset" method="post">
        {{ csrf_field() }}
        <tr>
            <th>message:</th>
            <td><input type="text" name="message" value="{{old('message')}}"></td>
        </tr>
        <tr>
            <th>url:</th>
            <td><input type="text" name="url" value="{{old('url')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
</body>
</html>
