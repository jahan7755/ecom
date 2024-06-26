@extends('layouts.main')
@section('content')

<div class="bg-dark py-4">
  <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
          <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
          <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
          </li>
          <li class="breadcrumb-item text-nowrap active" aria-current="page">Order tracking</li>
        </ol>
      </nav>
    </div>
    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
      <h1 class="h3 text-light mb-0">Tracking order: <span class="h4 fw-normal text-light">34VB5540K83</span></h1>
    </div>
  </div>
</div>
<div class="container py-5 mb-2 mb-md-3">
  <!-- Details-->
  <div class="row gx-4 mb-4">
    <div class="col-md-4 mb-2">
      <div class="bg-secondary h-100 p-4 text-center rounded-3"><span class="fw-medium text-dark me-2">Shipped via:</span>UPS Ground</div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="bg-secondary h-100 p-4 text-center rounded-3"><span class="fw-medium text-dark me-2">Status:</span>Processing order</div>
    </div>
    <div class="col-md-4 mb-2">
      <div class="bg-secondary h-100 p-4 text-center rounded-3"><span class="fw-medium text-dark me-2">Expected date:</span>October 15, 2019</div>
    </div>
  </div>
  <!-- Progress-->
  <div class="card border-0 shadow-lg">
    <div class="card-body pb-2">
      <ul class="nav nav-tabs media-tabs nav-justified">
        <li class="nav-item">
          <div class="nav-link completed">
            <div class="d-flex align-items-center">
              <div class="media-tab-media"><i class="ci-bag"></i></div>
              <div class="ps-3">
                <div class="media-tab-subtitle text-muted fs-xs mb-1">First step</div>
                <h6 class="media-tab-title text-nowrap mb-0">Order placed</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="nav-link active">
            <div class="d-flex align-items-center">
              <div class="media-tab-media"><i class="ci-settings"></i></div>
              <div class="ps-3">
                <div class="media-tab-subtitle text-muted fs-xs mb-1">Second step</div>
                <h6 class="media-tab-title text-nowrap mb-0">Processing order</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="nav-link">
            <div class="d-flex align-items-center">
              <div class="media-tab-media"><i class="ci-star"></i></div>
              <div class="ps-3">
                <div class="media-tab-subtitle text-muted fs-xs mb-1">Third step</div>
                <h6 class="media-tab-title text-nowrap mb-0">Quality check</h6>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="nav-link">
            <div class="d-flex align-items-center">
              <div class="media-tab-media"><i class="ci-package"></i></div>
              <div class="ps-3">
                <div class="media-tab-subtitle text-muted fs-xs mb-1">Fourth step</div>
                <h6 class="media-tab-title text-nowrap mb-0">Product dispatched</h6>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- Footer-->
  <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-4">
    <div class="form-check mt-2 me-3">
      <input class="form-check-input" type="checkbox" id="notify-me" checked>
      <label class="form-check-label" for="notify-me">Notify me when order is delivered</label>
    </div><a class="btn btn-primary btn-sm mt-2" href="#order-details" data-bs-toggle="modal">View Order Details</a>
  </div>
</div>
</main>
    
@endsection