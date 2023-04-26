
@extends('layouts.app')
  @section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                                </label>
                              </div>
                            </div>
                          </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                              </button>

                              @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                              </a>
                              @endif
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endsection

              {{--
                @extends('layouts.app')
                <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
              <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
              </div>
              <div class="col-lg-12 login-title">
                ADMIN PANEL
              </div>

              <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                  <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                      <label for="email" class="col-md-4 col-form-label text-md-end form-control-label">{{ __('Email Address') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                              <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                              </div>
                              <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-2"></div>
                    </div>
        </div> --}}
