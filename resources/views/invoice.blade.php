@extends('layouts.app')
@section('content')

    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> Dominate Invoice</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dominate Invoice</li>
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

        <div class="card border shadow-none">
            <div class="card-header py-3">
                <div class="row align-items-center g-3">
                    <div class="col-12 col-lg-6">
                        <h5 class="mb-0">Dominate Order Invoice</h5>
                    </div>
                    <div class="col-12 col-lg-6 text-md-end">
                        {{-- <a href="javascript:;" class="btn btn-sm btn-danger me-2"><i class="bi bi-file-earmark-pdf-fill"></i> Export as PDF</a>
              <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-secondary"><i class="bi bi-printer-fill"></i> Print</a> --}}
                    </div>
                </div>
            </div>
            <div class="card-header py-2 bg-light">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col">
                        {{-- <div class="">
            <small>from</small>
            <address class="m-t-5 m-b-5">
               <strong class="text-inverse">Twitter, Inc.</strong><br>
               Street Address<br>
               City, Zip Code<br>
               Phone: (123) 456-7890<br>
               Fax: (123) 456-7890
            </address>
           </div>
         </div> --}}

                     <div class="col">
                            <div class="">
                                {{-- <small>to</small> --}}
                                <address class="m-t-5 m-b-5">
                                    {{-- <strong class="text-inverse"> Customar Name</strong><br>
                                    zubair bin ferdous <br>
                                    <strong class="text-inverse"> Customar Phone</strong><br>
                                    01924495997 <br>
                                    <strong class="text-inverse"> Customar Email</strong><br>
                                    zubairbinf@gmail.com <br> --}}

                                </address>
                            </div>
                        </div></div></div>

                        <div class="col">
                            {{-- <div class="">
            <small>Invoice / July period</small>
            <div class=""><b>August 3,2012</b></div>
            <div class="invoice-detail">
               #0000123DSS<br>
               Services Product
            </div>
          </div> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th>Produt Item</th>
                                    <th>Produt Id</th>
                                    <th class="text-center" width="10%">Product Name </th>
                                    <th class="text-center" width="10%">Quantity</th>
                                    <th class="text-right" width="20%"> Unit Cost</th>
                                    <th class="text-right" width="20%"> Total Cost </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 1;
                                @endphp
                                @foreach ($contents as $item)

                                    <tr>
                                        <td> {{ $sl++ }} </td>
                                        <td>
                                            <span class="text-inverse"> {{ $item->id }} </span><br>
                                        </td>
                                        <td class="text-center">{{ $item->name }} </td>
                                        <td class="text-center">{{ $item->qty }}</td>
                                        <td class="text-right">{{ $item->price }}</td>
                                        <td class="text-right">{{ $item->price * $item->qty }}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="row bg-light align-items-center m-0">
                        <div class="col col-auto p-4">
                            {{-- <p class="mb-0">SUBTOTAL</p>
          <h4 class="mb-0">$4,500.00</h4> --}}
                        </div>
                        <div class="col col-auto p-4">
                            {{-- <i class="bi bi-plus-lg text-muted"></i> --}}
                        </div>
                        <div class="col col-auto me-auto p-4">
                            {{-- <p class="mb-0">PAYPAL FEE (5.4%)</p>
          <h4 class="mb-0">$108.00</h4> --}}
                        </div>
                        <div class="col bg-dark col-auto p-4">
                            <p class="mb-0 text-white">TOTAL Price</p>
                            <h4 class="mb-0 text-white">{{ Cart::subtotal() }}</h4>
                        </div>
                    </div>
                    <!--end row-->

                    <hr>
                    <div class="button" style="margin-left: 92%">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Submit Order</button>
                    </div>
                    <!-- end invoice-note -->
                </div>



                <div class="card-footer py-3">
                    <p class="text-center mb-2">
                        THANK YOU FOR YOUR BUSINESS
                    </p>
                    <p class="text-center d-flex align-items-center gap-3 justify-content-center mb-0">
                        <span class=""><i class="bi bi-globe"></i> www.domain.com</span>
                        <span class=""><i class="bi bi-telephone-fill"></i> T:+11-0462879</span>
                        <span class=""><i class="bi bi-envelope-fill"></i> info@example.com</span>
                    </p>
                </div>
            </div>
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TOTAL PRICE :<span style="color: brown"> {{ Cart::subtotal() }} </span> </h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="border p-3 rounded">

                                            <form class="row g-3" method="POST" action=" {{url('/final-invoice')}} ">
                                                @csrf

                                                <div class="col-6">
                                                    <label class="form-label">Payment</label>
                                                    <select class="form-select mb-3" aria-label="Default select example" name="payment_status">
                                                        <option value="Handcash">Handcash</option>
                                                        <option value="Due">Due</option>
                                                    </select>
                                                </div>

                                                {{-- <div class="col-6">
                                                    <label class="form-label">Size</label>
                                                    <select class="form-select mb-3" aria-label="Default select example" name="size">
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="Xl">Xl</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div> --}}

                                                <div class="col-6">
                                                    <label class="form-label"> Amount to pay </label>
                                                    <input type="text" class="form-control" name="pay">
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Amount to due </label>
                                                    <input type="text" class="form-control" name="due">
                                                </div>

                                                

                                                <div class="col-12">
                                                    <label class="form-label">customer Name</label>
                                                    <input type="text" class="form-control" name="Customar_name" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">customar Phone</label>
                                                    <input type="number" class="form-control" name="Customar_phone" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">coustmar Email</label>
                                                    <input type="email" class="form-control" name="Customar_email" required>
                                                </div>



                                                <input type="hidden" name="order_status" value="pending">
                                                <input type="hidden" name="total_products" value=" {{ Cart::count() }} ">
                                                <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">


                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

@endsection
