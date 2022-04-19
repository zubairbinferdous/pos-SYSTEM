@extends('layouts.app')
@section('content')

@php
    $order=DB::table('orders')->sum('total_products');
    $order=DB::table('orders')->sum('total_products');
    $amout_pay=DB::table('orders')->sum('pay');
    $amount=DB::table('expances')->sum('amount');
    $product=DB::table('products')->get();
    $categorys=DB::table('categorys')->get();
    $success=DB::table('orders')->where('order_status', 'success')->get();
    $pending=DB::table('orders')->where('order_status', 'pending')->get();
    $customar=DB::table('orders')->get();
    $users=DB::table('users')->get();
@endphp


<main class="page-content">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-pink">
                  <p>Total Products Sell</p>
                  <h4 class="text-pink"> {{  $order }} </h4>
                </div>
                <div class="w-50 bg-pink p-3">
                   <p class="mb-3 text-white"></p>
                   <div id="chart1"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-purple">
                  <p>Total Amount Pay</p>
                  <h4 class="text-purple"> {{$amout_pay}} </h4>
                </div>
                <div class="w-50 bg-purple p-3">
                   <p class="mb-3 text-white"></p>
                   <div id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-success">
                  <p>Total Catogorys</p>
                  <h4 class="text-success">{{ count($categorys) }}</h4>
                </div>
                <div class="w-50 bg-success p-3">
                   <p class="mb-3 text-white"></p>
                   <div id="chart3"></div>
                </div>
              </div>
            </div>
          </div>
         </div>


         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Total Product</p>
                  <h4 class="text-orange">{{ count($product) }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"></p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>


         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Total Sell</p>
                  <h4 class="text-orange">{{ count($success) }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"> </p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>


         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Pending Orders</p>
                  <h4 class="text-orange">{{ count($pending) }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"></p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>

         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Total Customers</p>
                  <h4 class="text-orange">{{ count($customar) }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"> </p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>


         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p>Total Users</p>
                  <h4 class="text-orange">{{ count($users) }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"> </p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>


         <div class="col">
          <div class="card overflow-hidden radius-10">
              <div class="card-body p-2">
               <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                <div class="w-50 p-3 bg-light-orange">
                  <p> Expances</p>
                  <h4 class="text-orange">{{ $amount }} </h4>
                </div>
                <div class="w-50 bg-orange p-3">
                   <p class="mb-3 text-white"> </p>
                   <div id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
         </div>




      </div>
    
    
    </main>
@endsection
