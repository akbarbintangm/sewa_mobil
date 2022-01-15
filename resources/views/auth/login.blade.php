@extends('layouts.app')

@section('pageTitle')
Login
@endsection

@section('bg-body')
bg-primary
@endsection

@section('content')
<div class="container">
	<!-- Outer Row -->
	<div class="row vh-100 justify-content-center">
		<div class="col-xl-5 col-lg-5 col-md-3 align-self-center">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						{{-- <div class="col-lg d-none d-lg-block bg-login-image"></div> --}}
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
								</div>
								<form action="{{route('auth.do.login')}}" class="user" method="post" enctype="multipart/form-data">
									@csrf
                                    <div class="form-group">
										<input type="email" class="form-control shadow-sm" id="emailUser" name="emailUser" value="{{ old('emailUser') }}" aria-describedby="emailHelp"
										placeholder="Masukkan Username atau Email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control shadow-sm" id="passwordUser" name="passwordUser" value="{{ old('passwordUser') }}" placeholder="Masukkan Password">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="rememberMe" name="rememberMe">
											<label class="custom-control-label" for="rememberMe">Ingat Saya</label>
										</div>
									</div>
                                    @if (Session::get("error"))
                                        <div class="alert alert-danger alert-dismissable shadow-sm">
                                            <i class="fa fa-warning"></i>
                                            {{Session::get("error")}}
                                            <button type="button" class="close" style="margin-top:-5px;" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
									<button type="submit" class="btn btn-primary shadow-sm btn-block">
										Login
									</button>
									<hr>
									<a href="" class="btn btn-google shadow-sm btn-block disabled">
										<i class="fab fa-google fa-fw"></i> Login with Google
									</a>
									<a href="" class="btn btn-facebook shadow-sm btn-block disabled">
										<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
									</a>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="{{ url('/passwords/reset') }}">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="{{ url('register')}}">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection

	{{-- @section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Login') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('login') }}">
							@csrf

							<div class="row mb-3">
								<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

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
	@endsection --}}
