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
                <h5 class="card-title">Sign up</h5>
                <form class="form-body" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="d-grid">

                  </div>
                  <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                    <hr>
                  </div>
                    <div class="row g-3">


                      <div class="col-12">
                        <label for="inputEmailAddress" class="form-label">Enter you Name</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                          @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="inputEmailAddress" class="form-label">Enter you Email</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
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
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>

                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                          @endif

                        </div>
                      </div>


                      <div class="col-12">
                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                          <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                      </div>



                      <div class="col-12">
                        <div class="d-grid">
                          <button type="submit" class="btn btn-primary radius-30">Sign up</button>
                        </div>
                      </div>
                      <div class="col-12">
                        <p class="mb-0">Don't have an account yet? <a href="{{ route('login') }}">Sign in here</a></p>
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
