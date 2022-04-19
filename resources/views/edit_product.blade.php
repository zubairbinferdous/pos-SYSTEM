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
            <li class="breadcrumb-item active" aria-current="page">Edit New Product</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        {{-- <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div> --}}
      </div>
    </div>
    <!--end breadcrumb-->

      <div class="row">
         <div class="col-lg-8 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent"> 
               <h5 class="mb-0">Edit Product</h5>
              </div>
            <div class="card-body">
              <div class="border p-3 rounded">
              <form class="row g-3" method="post" action=" {{ url('/update-product/'.$edit->id) }} " enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label class="form-label">Product name</label>
                  <input type="text" class="form-control" value=" {{ $edit->product_name }}" name="product_name">
                </div>

                <div class="col-12 col-md-6">
                  <label class="form-label">Category <span style="color: brown">*******</span></label>
                  @php
                      $cat=DB::table('categorys')->get();
                  @endphp
                  <select class="form-select" name="cat_id" required>
                    <option value=""> Setect </option>
                    @foreach ($cat as $row)
                    <option value=" {{ $row->id }} " > {{$row->name}} </option>
                    @endforeach
                  </select>
                </div>


                <div class="col-12">
                  <label class="form-label">Product code</label>
                  <input type="text" class="form-control" value=" {{ $edit->product_code }}" name="product_code">
                </div>

                                
                <div class="col-12">
                  <img id="image" src="#" />
                  <label class="form-label">Images</label>
                  <input class="form-control" type="file" name="product_image" accept="image/*"   onchange="readURL(this);">
                </div>

                <div class="col-12">
                    <img id="image" src="{{ URL::to( $edit->product_image) }}" name="old_photo"  class="form-control" style="height: 90px; width:90px" />
                </div>



                <div class="col-12">
                  <label class="form-label"> Buying price </label>
                  <input type="text" class="form-control" value=" {{ $edit->buy_price }} " name="buy_price">
                </div>


                <div class="col-12">
                  <label class="form-label"> selling price </label>
                  <input type="text" class="form-control" value=" {{ $edit->sell_price }}" name="sell_price">
                </div>



                <div class="col-12">
                  <button class="btn btn-primary px-4">update Item</button>
                </div>
              </form>
              </div>
             </div>
            </div>
         </div>
      </div><!--end row-->

  </main>

  <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
     }
  </script>
@endsection