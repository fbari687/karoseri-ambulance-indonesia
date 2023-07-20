@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="fa-solid fa-medal"></i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Merk Yang Didukung</p>
            <h4 class="mb-0">{{ $brands->count() }}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          @if ($brands->isNotEmpty())
              @php
                  $latestBrand = $brands->last();
              @endphp
          <p class="mb-0">Latest Added Is<span class="text-success text-sm font-weight-bolder"> {{ $latestBrand->name }}</span></p>
          @else
          <p class="mb-0">No Models Available.</p>
          @endif
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="fa-solid fa-scroll"></i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Spec Yang Support</p>
            <h4 class="mb-0">{{ $specs->count() }}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          @if ($specs->isNotEmpty())
              @php
                  $latestSpec = $specs->last();
              @endphp
          <p class="mb-0">Latest Added Is<span class="text-success text-sm font-weight-bolder"> {{ $latestSpec->name }}</span></p>
          @else
          <p class="mb-0">No Specs Available.</p>
          @endif
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="fa-solid fa-car"></i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Model Yang Support</p>
            <h4 class="mb-0">{{ $cars->count() }}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          @if ($cars->isNotEmpty())
              @php
                  $latestCar = $cars->last();
              @endphp
          <p class="mb-0">Latest Added Is<span class="text-success text-sm font-weight-bolder"> {{ $latestCar->name }}</span></p>
          @else
          <p class="mb-0">No Models Available.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection