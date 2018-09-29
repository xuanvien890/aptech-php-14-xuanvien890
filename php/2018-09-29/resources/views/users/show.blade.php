<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class = "container">
    <div class ="row">
    <div class="col-12">
    <h2 class="text-center">Show page</h2>
    <table class="table table-hover table-bordered">
    <thead>
    <tr class="text-center">
    <th scope="col" class="">Id</th>
    <th scope="col" class="">Name</th>
    <th scope="col" class="">Email</th>
    <th scope="col" class="">Password</th>
    <th scope="col" class="">dob</th>
    <th scope="col" class="">Address</th>
    <th scope="col" class="">Phone</th>
    <th scope="col" class="">Created Date</th>
    <th scope="col" class="">Updated Date</th>
    <th scope="col" class="">Action</th>
</tr>
</thead>
<tbody>
<tr class="text-center">
<th scope ="row">{{$user->id}}</th>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->password}}</td>
<td>{{$user->dob}}</td>
<td>{{$user->address}}</td>
<td>{{$user->phone}}</td>
<td>{{$user->created_at}}</td>
<td>{{$user->updated_at}}</td>
<td class="d-flex border-0 align-items-center">
<button class="btn btn-sm btn-warning mx-2">
Edit</button>
<form action="http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/users/{{$user->id}}" method ="post">
    {{csrf_field()}}
<button class="btn btn-sm btn-warning mx-2">
Delete</button>
</form>
</td>
</tr>
</tbody>
</body>
</html>