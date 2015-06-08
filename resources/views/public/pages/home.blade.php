@extends('master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="container content-container">

			<div class="col-lg-12">
				@if ($errors->any())
					<ul class="alert alert-danger reg-errors alert-dismissable">
						<li><button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button></li>
						@foreach ($errors->all() as $err)
							<li>{{ $err }}</li>
						@endforeach
					</ul>
				@endif

				@if (session()->has('successMessage'))
					<ul class="alert alert-success">
						{{ session('successMessage') }}
					</ul>
				@endif
			</div>

				<div class="col-lg-5 col-lg-offset-1">
					<form role="form" method="POST" action="{{ url('/auth/login') }}" name="loginForm">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row col-lg-9">
							<h2 class="form-heading">Log in to TeachTennis</h2>
						</div>

						<div class="row col-lg-11">
							<div class="form-group top-margin">
							   <label for="loginEmail">Email Address</label>
							   <input type="email" class="form-control" id="loginEmail" name="email" data-toggle="tooltip" data-placement="left" title="use imants.kusins@gmail.com to login">
							 </div>
						</div>
						
						<div class="row col-lg-11">
							<div class="form-group">
							    <label for="loginPassword">Password</label> <a href="" class="fpwdLink">Forgot your password?</a>
							    <input type="password" class="form-control" id="loginPassword" name="password" data-toggle="tooltip" data-placement="left" title="use the password 'eskimo' to login">
							  </div>
						</div>

						<div class="row col-lg-9">
							<div class="form-group top-margin">
							@if (Auth::user())
								<button class="btn btn-primary btn-block form-btn" type="submit" disabled>You're already logged in</button>
							@else
								<button class="btn btn-primary btn-block form-btn" type="submit">LOGIN</button>
							@endif
							  </div>
						</div>
					</form>
				</div>
				<div class="col-lg-5">
					<form role="form" method="POST" action="{{ url('/create-user') }}" name="loginForm">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row col-lg-12">
							<h4 class="form-heading-reg">Create Account</h4>
						</div>

						<div class="row">
								
								

								<div class="form-group col-lg-6">
									<label>First Name</label>
									<input type="text" name="first_name" class="form-control" id="" value="{{ old('first_name') }}">
								</div>
							
								<div class="form-group col-lg-6">
									<label>Surname</label>
									<input type="text" name="surname" class="form-control" id="" value="{{ old('surname') }}">
								</div>
								<div class="form-group col-lg-12">
									<label>Email Address</label>
									<input type="email" name="email" class="form-control" id="" value="{{ old('email') }}">
								</div>
								<div class="form-group col-lg-12">
									<label>Phone Number</label>
									<input type="text" name="phone" class="form-control" id="" value="{{ old('phone') }}">
								</div>
								<div class="form-group col-lg-12">
								    <label id="tandcs">
										<input type="checkbox" class="chkbox" name="tandcs" checked> I have read and agree to the <a href="">Terms &amp; Conditions</a> and <a href="">Privacy Policy</a>.
								    </label>
								</div>
								<div class="col-lg-7">
									<div class="form-group">
								    	<button type="submit" class="btn btn-primary btn-block form-btn">CREATE ACCOUNT</button>
								  	</div>
								</div>
						</div>

					</form>
				</div>



			</div>
		
		</div>
	</div>

@stop