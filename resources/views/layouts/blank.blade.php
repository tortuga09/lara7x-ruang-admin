@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blank Page</h1>
  </div>

  <!-- content start here -->
  <div class="col-md-12">
    @include('components.alert')
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between alert-light">
        <h6 class="m-0 font-weight-bold text-primary">Card Header</h6>
      </div>
      <div class="card-body">
        You are logged in!
      </div>
    </div>
  </div>
  <!-- content end here -->
</div>
@endsection
