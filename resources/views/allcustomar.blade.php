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
          <li class="breadcrumb-item active" aria-current="page">All Coustmar</li>
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
            <h5 class="mb-0">All Coustmar</h5>
             {{-- <form class="ms-auto position-relative">
               <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
               <input class="form-control ps-5" type="text" placeholder="search">
             </form> --}}
         </div>
         <div class="table-responsive mt-3">
           <table class="table align-middle">
             <thead class="table-secondary">
               <tr>
                <th>Name</th>
                <th>phone</th>
                <th>Email</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($customar as $row)
                   
               <tr>
                <td> {{ $row->Customar_name }} </td>

                 <td>{{ $row->Customar_phone }}</td>

                 <td>{{ $row->Customar_email }}</td>

               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>

@endsection