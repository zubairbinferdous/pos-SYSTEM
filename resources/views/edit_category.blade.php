@extends('layouts.app')

@section('content')
<main class="page-content">
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dominate</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Edit Category </li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
     
    </div>
  </div>
  <!--end breadcrumb-->

    <div class="row">
       <div class="col-lg-8 mx-auto">
        <div class="card">
          <div class="card-header py-3 bg-transparent"> 
             <h5 class="mb-0">Edit Category</h5>
            </div>
          <div class="card-body">
            <div class="border p-3 rounded">


            <form class="row g-3" method="post" action=" {{ url('/update-category/'.$edit->id) }} " enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label class="form-label">Category name </label>
                <input type="text" name="name" class="form-control" value="{{ $edit->name }} " required>
              </div>

              <div class="col-12">
                <button class="btn btn-primary px-4">Submit Item</button>
              </div>
            </form>


            </div>
           </div>
          </div>
       </div>
    </div><!--end row-->

</main>

@endsection