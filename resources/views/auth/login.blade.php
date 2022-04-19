@extends('layouts.app')

@section('content')


<main class="authentication-content">
    <div class="container-fluid">
      <div class="authentication-card">
        <div class="card shadow rounded-0 overflow-hidden">
          <div class="row g-0">
            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
              <img src="{{asset('public/backend/assets/images/error/login-img.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title">Sign In</h5>
                {{-- <p class="card-text mb-5">See your growth and get consulting support!</p> --}}
                <form class="form-body" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="d-grid">
                    {{-- <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
                        <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="">
                        <span>Sign in with Google</span>
                      </span>
                    </a> --}}
                  </div>
                  <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                    <hr>
                  </div>


                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Enter you Email</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i></i></div>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                              
                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                            </div>
                        </div>
                        


                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Enter your password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i></i></div>
    
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
    
                            </div>
                          </div>

                      

                      
                      <div class="col-12">
                        <div class="d-grid">
                          <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                        </div>
                      </div>

                      <div class="col-12">
                        <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a></p>
                      </div>

                    </div>
                </form>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

@endsection
