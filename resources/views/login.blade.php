<!DOCTYPE html>

	<head>
		<link rel="stylesheet" type="text/css" href="../assets/css/styleLogin.css">

		<title>Login Page</title>
		<style>
			body{
				background-image: url(../assets/image/background.jpg);
				background-size: cover;
				background-attachment: fixed;
			}
			p{	color: black;	}
		</style>
	</head>

	<body>
		<img src="../assets/image/logo.png" class="logo" width="200" height="100"><br/>

		<div class="boxLogin">
			<img src="../assets/image/user_icon.png" class="iconLogin">
			<!-- Main Section -->
			<section class="main-section">
				<div class="content">

					

					<form action={{url('/loginPost')}} method="post" class="form">
						{{ csrf_field() }}
						<label for="username" style="padding-top: 13px">&nbsp;Username</label>
						<input 
						id="username"
						class="form-content"
						autocomplete="on"
						required="required" 
						type="username" 
						name="username"/>
						<div class="form-border"></div>
						<label for="user-password" style="padding-top: 22px">&nbsp;Password</label>
						<input 
						id="password" 
						class="form-content" 
						type="password" 
						name="password"
						required="required">
						<div class="form-border"></div>

						<a href="#"><legend id="forgot-password">Lupa password?</legend></a>
						<input 
						id="submit-btn" 
						type="submit" 
						name="submit"
						value="LOGIN"
						/>
						<a href="#" id="signup">Belum memiliki akun?</a>
					</form>
				</div>
			</section>
		</div>
						@if(\Session::has('alert'))
								<div class="alertWarning">{{Session::get('alert')}}</div>
						@endif

						@if(\Session::has('alert-success'))
							<div class="alertSuccess">
								<div>{{Session::get('alert-success')}}</div>
							</div>
						@endif

	</body>

</html>
