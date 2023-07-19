@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="fa-solid fa-car"></i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Mobil Yang Support</p>
            <h4 class="mb-0">35</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0">Latest Added Is<span class="text-success text-sm font-weight-bolder"> Hino Dutro Short</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection