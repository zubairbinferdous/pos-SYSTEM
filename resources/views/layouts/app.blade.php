<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('public/backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/baclend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{asset('public/backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- toster --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link href="{{asset('public/backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet')}}" />


    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{asset('public/backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">


    <!-- loader-->
    <link href="{{ asset('public/backend/assets/css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('public/backend/assets/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/backend/assets/css/header-colors.css') }}" rel="stylesheet" />

    <title> Admin </title>
    <style>
        .pdr {
            padding-right: 25px;
        }

    </style>
</head>

<body>

    @guest

    @else
        <!--start wrapper-->
        <div class="wrapper">
            <!--start top header-->
            <header class="top-header">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-icon fs-3">
                        <i class="bi bi-list"></i>
                    </div>

                    <div class="top-navbar-right ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item search-toggle-icon">
                                <a class="nav-link" href="#">
                                    <div class="">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-user-setting">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="user-setting d-flex align-items-center">
                                        <img src="{{asset('public/backend/assets/images/user.png')}}" class="user-img" alt="">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('public/backend/assets/images/user.png')}}" alt="" class="rounded-circle"
                                                    width="54" height="54">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                                    {{-- <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small> --}}
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <div class="d-flex align-items-center">
                                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                                <div class="ms-3"><span>Logout</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="projects">
                                        <i class="bi bi-grid-3x3-gap-fill"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 gx-2">
                                        <div class="col">
                                            <a href="ecommerce-orders.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                                        <i class="bi bi-basket2-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Orders</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                                        <i class="bi bi-people-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Users</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="ecommerce-products-grid.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                                        <i class="bi bi-trophy-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Products</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="component-media-object.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                                        <i class="bi bi-collection-play-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Media</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="pages-user-profile.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Account</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                                        <i class="bi bi-file-earmark-text-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Docs</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="ecommerce-orders-detail.html">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                                        <i class="bi bi-credit-card-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Payment</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                                        <i class="bi bi-calendar-check-fill"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Events</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="apps p-2 radius-10 text-center">
                                                    <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                                        <i class="bi bi-book-half"></i>
                                                    </div>
                                                    <p class="mb-0 apps-name">Story</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </li> --}}

                        </ul>
                    </div>
                </nav>
            </header>
            <!--end top header-->

            <!--start sidebar -->
            <aside class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div>
                        <img src="assets/images/logo-icon.png" class="logo-icon" alt="">
                    </div>
                    <div>
                        <h4 class="logo-text">Dominate Fashion</h4>
                    </div>
                    {{-- <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div> --}}
                </div>
                <!--navigation-->
                <ul class="metismenu" id="menu">

                    @if(Auth::user()->category == 1)

                    <li>
                        <a href="{{ Route('home') }}">
                            <div class="parent-icon"><i class="bi bi-house-fill"></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>

                    @else
                    @endif


                    <li>
                        <a href="{{ Route('pos') }}">
                            <div class="parent-icon"><i class="lni lni-calculator"></i>
                            </div>
                            <div class="menu-title">Pos Management</div>
                        </a>
                    </li>


                    @if(Auth::user()->category == 1)

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-emoji-smile"></i>
                            </div>
                            <div class="menu-title">Employee</div>
                        </a>
                        <ul>
                            <li> <a href="{{ route('addEmployee') }}"><i class="bi bi-circle"></i>Add Employe</a>
                            </li>
                            <li> <a href="{{ route('allEmployee') }}"><i class="bi bi-circle"></i>All Employe</a>
                            </li>
                        </ul>
                    </li>

                    @else
                    @endif



                    @if(Auth::user()->category == 1)

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-shape-polygon"></i>
                            </div>
                            <div class="menu-title">Category</div>
                        </a>
                        <ul>
                            <li> <a href="{{ route('addCategory') }}"><i class="bi bi-circle"></i>Add Category</a>
                            </li>
                            <li> <a href="{{ route('allCategory') }}"><i class="bi bi-circle"></i>All Category</a>
                            </li>
                        </ul>
                    </li>

                    @else
                    @endif


     

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-cart-full"></i>
                            </div>
                            <div class="menu-title">Products</div>
                        </a>
                        <ul>
                            <li> <a href="{{ route('addProduct') }}"><i class="bi bi-circle"></i>Add Products</a>
                            </li>
                            <li> <a href="{{ route('allProduct') }}"><i class="bi bi-circle"></i>All Products</a>
                            </li>
                        </ul>
                    </li>



                    @if(Auth::user()->category == 1)
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-first-aid"></i>
                            </div>
                            <div class="menu-title">Orders</div>
                        </a>
                        <ul>
                            <li> <a href=" {{ route('pending-orders')}} "><i class="bi bi-circle"></i>Pending Orders</a>
                            </li>
                            <li> <a href=" {{ route('success-orders')}} "><i class="bi bi-circle"></i>Success Orders</a>
                            </li>
                        </ul>
                    </li>

                    @else
                    @endif



                    @if(Auth::user()->category == 1)
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-user"></i>
                            </div>
                            <div class="menu-title">Customar </div>
                        </a>
                        <ul>
                            <li> <a href=" {{route('customar')}} "><i class="bi bi-circle"></i>All Customar</a>
                            </li>
                        </ul>
                    </li>

                    @else
                    @endif


                    @if(Auth::user()->category == 1)

                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-popup"></i>
                            </div>
                            <div class="menu-title">Add Expances </div>
                        </a>
                        <ul>

                                                        
                            <li> <a href="{{route('addexpences')}} "><i class="bi bi-circle"></i>Add Expances</a>
                            </li>

                            <li> <a href=" {{route('allexpences')}}"><i class="bi bi-circle"></i>All Expances</a>
                            </li>

                        </ul>
                    </li>

                    
                    @else
                    @endif






                    {{-- <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="lni lni-users"></i>
                            </div>
                            <div class="menu-title">User Role</div>
                        </a>
                        <ul>
                            <li> <a href=" {{route('adduser')}} "><i class="bi bi-circle"></i>Add User</a>
                            </li>
                            <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>All User</a>
                            </li>
                        </ul>
                    </li> --}}





                </ul>

            </aside>

            <div class="overlay nav-toggle-icon"></div>
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>




        </div>


    @endguest

    @yield('content')


    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('public/backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('public/backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('public/backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{asset('public/backend/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/table-datatable.js')}}"></script>
    <!--app-->
    <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/index2.js') }}"></script>
    <script>
        new PerfectScrollbar(".best-product")
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>


    <script>
        @if (Session::has('messege'))
            var type="{{ Session::get('alert-type', 'info' , ) }}"
            switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
            
            }
        @endif
    </script>


    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>


</body>

</html>
