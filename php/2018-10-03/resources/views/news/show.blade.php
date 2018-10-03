@extends('layouts.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="text-uppercase text-center">SHOW PAGE</h3>
      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" >No</th>
            <th scope="col" >Title</th>
            <th scope="col" >Slug</th>
            <th scope="col" >Short Description</th>
            <th scope="col" >Full Content</th>
            <th scope="col" >Author</th>
            <th scope="col" >Category</th>
            <th scope="col" >Created Date</th>
            <th scope="col" >Updated Date</th>
            <th scope="col" >Action</th>
          </tr>
        </thead>
        <tbody>
        
          <tr class="text-center">
            <th scope="row">{{$new->id}}</th>
            <td>{{$new->title}}</td>
            <td>{{$new->slug}}</td>
            <td>{{$new->short_description}}</td>
            <td>{{$new->full_content}}</td>
            <td>{{$new->author}}</td>
            <td>{{$new->category}}</td>
            <td>{{$new->created_at}}</td>
            <td>{{$new->updated_at}}</td>

            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('news.edit',$new->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-1">
                  EDIT
                </button>
              </form>

               <form action="{{route('news.destroy',$new->id)}}" method="post">
               <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger rounded-1">
                  DELETE
                </button>
              </form>

              </td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection