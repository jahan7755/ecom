@extends('Layouts.AdminApp')


@section('content')

{{-- {{dd($brands)}} --}}

@if (session('success'))
      <div class="alert alert-success">{{session('success')}}</div>
@endif
@if (session('danger'))
      <div class="alert alert-danger">{{session('danger')}}</div>
@endif
@if (session('primary'))
      <div class="alert alert-primary">{{session('primary')}}</div>
@endif


<div class="card">
    <h5 class="card-header">
        All Brands
        <a href="{{url('/admin/brands/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Brand</a>



    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Name</th>
            <th>Seller</th>
            <th>Location</th>
            <th>Brand Origin</th>
            <th>Rating</th>
            <th>Logo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($brands as $brand)
                {{-- {{dd($brand)}} --}}
          <tr>
            
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->seller}}</td>
            <td>{{$brand->location}}</td>
            <td>{{$brand->origin}}</td>
            <td>{{$brand->rating}}</td>
            <td><img src="{{asset('/brands/logo/'.$brand->logo)}}" width="50px" height="50px"></img></td>

            <td>
                <a href="{{url('/admin/brands/update',['id'=>$brand->id])}}" class="btn btn-sm btn-primary text-white">Update</a>
                <a href="/admin/brands/{{$brand->id}}/delete/" class="btn btn-sm btn-danger text-white">Delete</a>
            </td>
            
          </tr>

            @endforeach
            
        </tbody>
      </table>
    </div>
  </div>
















@endsection