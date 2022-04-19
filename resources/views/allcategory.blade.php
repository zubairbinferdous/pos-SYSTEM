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
                <th>action</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($categorys as $row)
                   
               <tr>
                <td> {{ $row->id }} </td>

                 <td>{{ $row->name }}</td>
                
                 <td>
                   <div class="table-actions d-flex align-items-center gap-3 fs-6">

                     <a href=" {{ URL::to('/edit-category/'.$row->id)}} " class="text-warning"  data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>

                     <a href=" {{ URL::to('/delete-category/'.$row->id)}}" id="delete" class="text-danger"  data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                   </div>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
       </div>
     </div>

@endsection