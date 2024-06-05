@extends('layouts.main')
@section('content')

<div class="container py-4 py-lg-5 my-4">
  <div class="row">
    <!-- Form Column -->
    <div class="col-md-6">
      <div class="card border-0 shadow form-card">
        <div class="card-body">
          <h2 class="h4 mb-3">Sign Up</h2>
          <p class="fs-sm text-muted mb-4">Registration takes less than a minute but gives you full control over your orders.</p>
          <form class="needs-validation" novalidate method="POST">
            <div class="row gx-4 gy-3">
              <div class="col-sm-6">
                <label class="form-label" for="reg-fn">Name</label>
                <input class="form-control" type="text" name="name" required id="reg-fn">
                <div class="invalid-feedback">Please enter your name!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="reg-email">E-mail Address</label>
                <input class="form-control" type="email" name="email" required id="reg-email">
                <div class="invalid-feedback">Please enter valid email address!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="reg-phone">Phone Number</label>
                <input class="form-control" type="text" name="phnno" required id="reg-phone">
                <div class="invalid-feedback">Please enter your phone number!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="reg-password">Password</label>
                <input class="form-control" type="password" name="password" required id="reg-password">
                <div class="invalid-feedback">Please enter password!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="reg-password-confirm">Confirm Password</label>
                <input class="form-control" type="password" name="confirmPassword" required id="reg-password-confirm">
                <div class="invalid-feedback">Passwords do not match!</div>
              </div>
              <div class="col-12 text-end">
                <button class="btn btn-primary" type="submit"><i class="ci-user me-2 ms-n1"></i>Sign Up</button>
              </div>
            </div>
            @csrf
          </form>
        </div>
      </div>
    </div>
    <!-- Image Column -->
    <div class="col-md-6 d-flex align-items-start">
      <div class="signup-image-container">
        <img src="{{ asset('frontend\img\Mobile-login.jpg') }}" alt="Sign Up Vector Image" class="img-fluid signup-image">
      </div>
    </div>
  </div>
</div>
@endsection

@section('styles')
<style>
  .form-card {
    background-color: #fff;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  .signup-image-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100%;php 
  }

  .signup-image {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

</style>
@endsection


