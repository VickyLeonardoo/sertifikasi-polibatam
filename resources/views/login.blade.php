<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asetlog/css/util.css">
	<link rel="stylesheet" type="text/css" href="asetlog/css/main.css">
	<meta name="robots" content="noindex, follow">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="/proses_login">
                    @csrf
					<span class="login100-form-title p-b-51">
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Nim is required">
						<input class="input100" type="text" name="nim" placeholder="NIM">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>

					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
@include('sweetalert::alert')

</html>
