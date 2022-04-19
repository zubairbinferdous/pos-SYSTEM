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
          <li class="breadcrumb-item active" aria-current="page">All Employee</li>
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
            <h5 class="mb-0">All Employee</h5>
             {{-- <form class="ms-auto position-relative">
               <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
               <input class="form-control ps-5" type="text" placeholder="search">
             </form> --}}
         </div>
         <div class="table-responsive mt-3">
           <table class="table align-middle">
             <thead class="table-secondary">
               <tr>
                <th>#</th>
                <th>Name</th>
                <th>phone</th>
                <th>salary</th>
                <th>action</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($employees as $row)
                   
               <tr>
                <td> {{ $row->id }} </td>
                 <td>
                   <div class="d-flex align-items-center gap-3 cursor-pointer">
                      <img src=" {{ $row->photo }} " class="rounded-circle" width="44" height="44" alt="">
                      <div class="">
                        <p class="mb-0">{{ $row->name }}</p>
                      </div>
                   </div>
                 </td>
                 <td>{{ $row->phone }}</td>
                 <td>{{ $row->salary }}</td>
                
                 <td>
                   <div class="table-actions d-flex align-items-center gap-3 fs-6">
                  
                     <a href=" {{ URL::to('edit-employee/'.$row->id)}} " class="text-warning"  data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>

                     <a href=" {{ URL::to('delete-employee/'.$row->id)}} " id="delete" class="text-danger"  data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                   </div>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>


     {{-- <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
           <h5 class="mb-0">Order Table</h5>
            <form class="ms-auto position-relative">
              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
              <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
          <table class="table align-middle mb-0">
            <thead class="table-light">
             <tr>
               <th>Product</th>
               <th>Photo</th>
               <th>Product ID</th>
               <th>Status</th>
               <th>Amount</th>
               <th>Date</th>
               <th>Shipping</th>
             </tr>
             </thead>
             <tbody><tr>
              <td>Sport Shoes</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#9405822</td>
              <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
              <td>$1250.00</td>
              <td>03 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                </div>
              </td>
             </tr>
    
             <tr>
              <td>Man Headcap</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#8304620</td>
              <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
              <td>$1500.00</td>
              <td>05 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                </div></td>
             </tr>
    
             <tr>
              <td>Sunglass</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#4736890</td>
              <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
              <td>$1400.00</td>
              <td>06 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"></div>
                </div></td>
             </tr>
    
             <tr>
              <td>Shirt Formal</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#8543765</td>
              <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
              <td>$1200.00</td>
              <td>14 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                </div></td>
             </tr>
             <tr>
              <td>Black Coat Pant</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#9629240</td>
              <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
              <td>$1500.00</td>
              <td>18 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                </div></td>
             </tr>
             <tr>
              <td>Heals</td>
              <td><img src="https://via.placeholder.com/400X300" class="product-img-2" alt="product img"></td>
              <td>#8506790</td>
              <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
              <td>$1800.00</td>
              <td>21 Feb 2020</td>
              <td><div class="progress" style="height: 5px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"></div>
                </div></td>
             </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div> --}}

</main>
@endsection