@extends('layouts.AdminApp')

@section('content')

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Brand</h5> <small class="text-muted float-end">Default label</small>
      </div>
      <div class="card-body">

        <form action="" enctype="multipart/form-data" method="POST">

            @csrf

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name"   />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="seller">Seller</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="seller" name="seller"  />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="origin">Origin</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="origin" name="origin"  />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="location">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="location" name="location"  />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="rating">Rating</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rating" name="rating"  />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="logo">Logo</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*" />
            </div>
        </div>
          
         
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    
@endsection