@extends('layouts.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 ">
      <h3 class="text-uppercase text-center">EDIT PAGE</h3>
      <form action="{{route('news.update',$new->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> {{csrf_field()}}

      <div class="form-group ">
          <label class="text-uppercase font-weight-bold" >Title</label>
          <input type="text" class="form-control rounded-0"  placeholder="Title" name="title" value="{{$new->title}}">
        </div> 

        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
           SAVE
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection