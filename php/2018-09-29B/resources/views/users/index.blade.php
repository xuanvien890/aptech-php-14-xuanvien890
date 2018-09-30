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
<div class="row">
<div class="col-12">
<h2 class = "text-center">Index page</h2>
<br>
<table class="table table-hover table-bordered">
    <thead>
    <tr class ="text-center">
        <th scope="col" class="">ID</th>
        <th scope="col" class=""> Name</th>
        <th scope="col" class=""> Email</th>
        <th scope="col" class="">Action</th>
    </tr>
    </thead>
    <tbody>
@foreach($users as $user)
    <tr class="text-center">
        <th scope="row">{{ $user-> id }}</th>
        <td>{{$user->name}}</td>
         <td>{{$user->email}}</td>
        <td class="d-flex align-items-center justify-content-around">
        <form action="http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/show/{{$user->id}}" method="get">
        <button class="btn btn-sm btn-primary">Show</button>
        </form>
        <form action="http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/users/{{$user->id}}/edit" method="get">
        <button class="btn btn-sm btn-primary">Edit</button>
        </form>
        <button class="btn btn-sm btn-primary">Delete</button>
        <form action="http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/users/create" method="get">
        <button class="btn btn-sm btn-primary">Create</button>
        </form>
        </td>
    </tr>
@endforeach
</tbody>
<table>
</body>
</html>
