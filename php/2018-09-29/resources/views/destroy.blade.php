{{$user->name}}
{{$user->email}}
<form action="http://localhost/aptech-php-14-xuanvien890/php/2018-09-29/public/destroy/{{$user->id}}" method="POST">
{{csrf_field()}}
<button>xoa</button>
</form>

