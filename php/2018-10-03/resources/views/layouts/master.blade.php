<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APTECH PHP CRUD DEMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('./favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
</head>
<body>
@include('layouts.header')
  <hr> 
@section('content') @show
  <hr>
  @include('layouts.footer')
     </body>
</html>