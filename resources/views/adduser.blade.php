@extends('layouts.app')

@section('content')
<main class="page-content">
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 offset-2">
<div class="card">
  <div class="card-body">
    <div class="border p-3 rounded">
    <h6 class="mb-0 text-uppercase">Register form</h6>
     <hr/>
    <form class="row g-3">
      <div class="col-12">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control">
      </div>

      <div class="col-12">
        <label class="form-label">Email ID</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-12">
        <label class="form-label">Password</label>
        <input type="text" class="form-control">
      </div>

      <div class="col-12">
        <label class="form-label">Password</label>
        <input type="text" class="form-control">
      </div>


      <div class="col-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck3-a" checked>
          <label class="form-check-label" for="gridCheck3-a"> Subscribe to our newsletter </label>
        </div>
      </div>

      <div class="col-12">
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </div>


    </form>
  </div>
  </div>
</div>

  </div>
</main>

@endsection