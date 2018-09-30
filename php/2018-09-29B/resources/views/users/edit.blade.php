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
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h2 class ="text-uppercase">Edit Page</h2>
    <form action= "http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/users/{{$user->id}}/update" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label class="text-uppercase font-weight-bold" for="name">Name</label>
        <input type="text" class="form-control rounded-0" id="name" placeholder="name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="email">Email</label>
        <input type="text" class="form-control rounded-0" id="email" placeholder="Email" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
        <button type="submit" >
        Save
        </button>
        </div>
        </form>
        </div>
        </div>
        </div>
</body>
</html>