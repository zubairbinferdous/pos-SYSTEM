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
                        <li class="breadcrumb-item active" aria-current="page">Pos (point of sale) </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    {{-- <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a> --}}
                </div>
            </div>
        </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12 col-lg-5 d-flex">
                <div class="card w-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Order product</h5>
                    </div>
                    <div class="card-body">
                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product name </th>
                                                <th>Product Qty </th>
                                                <th>Sell Price</th>
                                                <th>total Price</th>
                                                <th>Action</th>
                                                {{-- <th>size</th> --}}
                                            </tr>
                                        </thead>

                                        @php
                                            $product = Cart::content();
                                        @endphp
                                        <tbody>
                                            @foreach ($product as $prod)

                                                <tr>
                                                    <td>{{ $prod->id}}</td>
                                                    <td>{{ $prod->name}}</td>

                                                    <td>
                                                        <form action="{{url('/cart_update/'.$prod->rowId)}}" method="post">
                                                          @csrf
                                                            <input type="number" name="qty" value="{{ $prod->qty}}" style="width: 40px">
                                                            <button type="submit" class="btn btn-sm"style="background-color: green"  > <i class="lni lni-target" style="color:black"></i> </button>
                                                         </form>
                                                    </td>
                                                    <td>{{ $prod->price}}</td>
                                                    <td>{{ $prod->price*$prod->qty }}</td>

                                                    <td>
                                                        <div class="d-flex align-items-center gap-3 fs-6">
                                                            <a href=" {{URL::to('/cart_remove/'.$prod->rowId)}} " class="text-danger" data-bs-placement="bottom"><i class="bi bi-trash-fill"></i></a>
                                                        </div>
                                                    </td>


                                                    {{-- <td>
                                                        <select style="width: 50px">
                                                            <option value="1">s</option>
                                                            <option value="2">l</option>
                                                            <option value="2">xl</option>
                                                        </select>
                                                    </td> --}}


                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>



                            </div>

                            <div class="col">
                                <div class="card rounded-0 bg-success">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-white bg-transparent border-light-1"
                                                style="font-size: 25px"><i class="bi bi-check-circle me-2"></i>Quantity : {{ Cart::count() }}
                                            </li>
                                            <li class="list-group-item text-white bg-transparent border-light-1"
                                                style="font-size: 25px"><i class="bi bi-check-circle me-2"></i>Sub Total :  {{ Cart::subtotal() }}
                                            </li>
                                        </ul>
                                        <div class="text-center text-white">
                                            <h5 class="mb-4 text-white">Total</h5>
                                            <h1 class="card-price text-white">  {{ Cart::subtotal() }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <form action=" {{url('/create-invoice')}} " method="post">
                            @csrf
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary"> Product Confirm </button>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 d-flex">

                <div class="card w-100">
                    <div class="card-header py-3">
                        <div class="row g-3">
                            <h5 class="mb-0"> Add product </h5>
                            <div class="col-lg-4 col-md-6 me-auto">
                                {{-- <div class="ms-auto position-relative">
                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                            class="bi bi-search"></i></div>
                                    <input class="form-control ps-5" type="text" placeholder="search produts">
                                </div> --}}
                            </div>
                            <div class="col-lg-2 col-6 col-md-3">
                                {{-- <select class="form-select">
                                    <option>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Pending</option>
                                    <option>Show All</option>
                                </select> --}}
                            </div>
                            <div class="col-lg-2 col-6 col-md-3">
                                {{-- <select class="form-select">
                                    <option>Show 10</option>
                                    <option>Show 30</option>
                                    <option>Show 50</option>
                                </select> --}}
                            </div>
                        </div>
                    </div>


                        <!--breadcrumb-->
                        {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">Tables</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                                    </ol>
                                </nav>
                            </div>
                    
                        </div> --}}
                        <!--end breadcrumb-->


                    
                 <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer name</th>
                                        <th>sell Price</th>
                                        <th>unit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $row)

                                        <tr>
                                            <form action=" {{ url('/add-cart') }} " method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->product_code }}">
                                                <input type="hidden" name="name" value="{{ $row->product_name }}">
                                                <input type="hidden" name="qty" value="1">
                                                <input type="hidden" name="price" value="{{ $row->sell_price }}">

                                                <td> {{ $row->product_code }} </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                        <img src="  {{ $row->product_image }} " class="rounded-circle"
                                                            width="44" height="44" alt="ZUBAIR">
                                                        <div class="">
                                                            <p class="mb-0"> {{ $row->product_name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $row->sell_price }}</td>
                                                <td>{{ $row->unit }}</td>

                                                <td>
                                                    <button type="submit" class="btn btn-info btn-sm"><i
                                                            class="lni lni-link"></i></button>
                                                </td>

                                            </form>
                                        </tr>

                                    @endforeach



                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer name</th>
                                        <th>sell Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>





        </div>
        <!--end row-->

    </main>


@endsection



                                


                                
                                
