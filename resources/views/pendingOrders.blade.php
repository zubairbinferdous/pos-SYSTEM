@extends('layouts.app')
@section('content')
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Tables</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">All Product</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
    
      </div>
    </div>
    <!--end breadcrumb-->
  
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center">
              <h5 class="mb-0">All Product</h5>
               <form class="ms-auto position-relative">
                 <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                 <input class="form-control ps-5" type="text" placeholder="search">
               </form>
           </div>
           <div class="table-responsive mt-3">
             <table class="table align-middle">
               <thead class="table-secondary">
                 <tr>
                  <th>Customar Name</th>
                  <th>Payment Status</th>
                  <th>Total Products</th>
                  <th> Product Price </th>
                  <th>Pay</th>
                  <th>Due</th>
                  
                  <th>Order Status</th>
                  <th> View Order</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($pending as $row)
                     
                 <tr>

                   <td> {{ $row->Customar_name }} </td>
                   <td>{{ $row->payment_status }}</td>
                   <td>{{ $row->total_products }}</td>
                   <td>{{ $row->sub_total }}</td>
                   <td>{{ $row->pay }}</td>
                   <td>{{ $row->due }}</td>
                   <td class="badge bg-warning text-dark" style="margin-top: 15px; margin-left: 19px; ">{{ $row->order_status }}</td>

                   
                   <td>

                     <div class="table-actions d-flex align-items-center gap-3 fs-6">

                       <a href=" {{ URL::to('view-order/'.$row->id)}} " class="btn btn-danger  position-relative me-lg-3" type="button" > <i class="lni lni-consulting"></i></a>
  
                     </div>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
         </div>
       </div>
  
  
  
  </main>
  
@endsection
