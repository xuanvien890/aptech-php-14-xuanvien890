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
    <div class="d-flex flex-row">
    <div class="col-12 px=0">
    <h2 class="text-uppercase">Create Page</h2>
    <form action="{{route('users.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group ">
    <div class="form-group">
    <label class="text-uppercase font-weight-bold" for="name">Name</label>
        <input type="text" class="form-control rounded-0" id="name" placeholder="name" name="name">
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="email">Email</label>
        <input type="text" class="form-control rounded-0" id="email" placeholder="Email" name="email" >
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="password">PassWord</label>
        <input type="text" class="form-control rounded-0" id="password" placeholder="password" name="password" >
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="email">DOB</label>
        <input type="text" class="form-control rounded-0" id="dob" placeholder="Dob" name="dob" >
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="email">ADDRESS</label>
        <input type="text" class="form-control rounded-0" id="address" placeholder="Address" name="address" >
        </div>
        <div class="form-group">
        <label class="text-uppercase font-weight-bold"  for="email">PHONE</label>
        <input type="text" class="form-control rounded-0" id="phone" placeholder="Phone" name="phone" >
        </div>
        <div class="form-group">
        <button type="submit" >
         Confirm
        </button>
        </div>
        </form>
        </div>
        </div>
        </div>
</body>
</html>
