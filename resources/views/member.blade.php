<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
            <td>Delete</td>
        </tr>

        @foreach ($thanhvien as $key => $val)
        <tr>
            <td>{{$val -> id}}</td>
            <td>{{$val -> name}}</td>
            <td>{{$val -> email}}</td>
            <td>{{$val -> password}}</td>
            <td><a href="/xoa-thanh-vien/{{$val -> id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>