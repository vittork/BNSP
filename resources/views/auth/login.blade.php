<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('auth/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{asset('auth/images/fernando-alvarez-rodriguez-M7GddPqJowg-unsplash.jpg')}});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #10</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						@if(session('error'))
							<div class="alert alert-danger" role="alert">
								{{session('error')}}
							</div>
						@endif	
		      	<h3 class="mb-4 text-center">Sign In</h3>
		      	<form action="{{route('auth.login.post')}}" method="post" class="signin-form">
							@csrf
		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control" style='border:1px solid #dedede' placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" style='border:1px solid #dedede' class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	

  <script src="{{asset('auth/js/jquery.min.js')}}"></script>
  <script src="{{asset('auth/js/popper.js')}}"></script>
  <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('auth/js/main.js')}}"></script>

	</body>
</html>

