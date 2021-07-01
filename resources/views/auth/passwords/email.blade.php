<!DOCTYPE html>
<html lang="en">
<head>
	<base href="../../../../">
	<meta charset="utf-8" />
	<title> Login Area </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="/assets/backend/css/pages/login/classic/login-5.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/css/themes/layout/brand/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
	<link href="/assets/backend/css/themes/layout/aside/dark.css?v=7.0.5" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<div class="d-flex flex-column flex-root">
		<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/assets/backend/media/bg/bg-2.jpg);">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<div class="d-flex flex-center mb-15">
						<a href="#">
							<img src="/assets/backend/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
						</a>
					</div>


					<div class="mb-10">
						<h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
						<p class="opacity-40">Enter your email to reset your password</p>
					</div>

					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="form-group mb-10">
							<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="email" placeholder="Email" name="email" required />
						</div>
						@error('email')
						<div class="form-group mb-10">
							<strong class="text-danger"> {{ $message }} </strong>
						</div>
						@enderror
						@if ($message = Session::get('status'))
						<div class="form-group mb-10">
							<strong class="text-success"> {{ $message }} </strong>
						</div>
						@endif
						<div class="form-group">
							<button type="submit" class="btn btn-pill btn-primary px-15 py-3 m-2">Request</button>
							<a href="/login" class="btn btn-pill btn-outline-white px-15 py-3 m-2">Cancel</a>
						</div>
					</form>



				</div>
			</div>
		</div>
	</div>

	<script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.5"></script>
	<script src="/assets/backend/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
	<script src="/assets/backend/js/scripts.bundle.js?v=7.0.5"></script>
	<script src="/assets/backend/js/pages/custom/login/login-general.js?v=7.0.5"></script>
</body>
</html>
