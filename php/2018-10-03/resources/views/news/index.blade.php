@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="text-uppercase text-center">Index Page</h3>
<table class="table table-hover table-bordered">
<thead>
<tr class="text-center">
<th scope="col" >No</th>
<th scope="col" >Title</th>
<th scope="col" >Slug</th>
<th scope="col" >Short Description</th>
<th scope="col" class="text-center">Action</th>
</tr>
</thead>
<tbody>
          @foreach($news as $new)
          <tr class="text-center">
            <th scope="row">{{$new->id}}</th>
            <td>{{$new->title}}</td>
            <td>{{$new->slug}}</td>
            <td>{{$new->short_description}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('news.show',$new->id)}}" method="get">
                <button class="btn btn-sm btn-primary   rounded-0">
                  SHOW
                </button>
              </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
