@extends('layouts.master') 
@section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <h3 class="text-uppercase text-center">Create Page</h3>
      <form action="{{route('news.store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
        <div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Title</label>
          <input type="text" class="form-control rounded-0"  id="title" placeholder="Title" name="title" >
        </div> 

         <div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Slug</label>
          <input type="text" class="form-control rounded-0"  id="slug" placeholder="Slug" name="slug" >
        </div> 

 <div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Short description</label>
          <input type="text" class="form-control rounded-0"  placeholder="short_description" name="short_description" >
        </div> 

        <div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Full Content</label>
          <input type="text" class="form-control rounded-0"  placeholder="full_content" name="full_content" >
        </div> 

<div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Author</label>
          <input type="text" class="form-control rounded-0"  placeholder="author" name="author" >
        </div> 

<div class="form-group ">
        <label class="text-uppercase font-weight-bold" >Category</label>
          <input type="text" class="form-control rounded-0"  placeholder="category" name="category" >
        </div> 

        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            SUBMIT
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection