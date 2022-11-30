<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
	<title>Login</title>
</head>

<body>
	<div class="form-structor">
		<div class="signup">
			<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
			<div class="form-holder">
				<input type="text" class="input" placeholder="Name" />
				<input type="email" class="input" placeholder="Email" />
				<input type="password" class="input" placeholder="Password" />
			</div>
			<button class="submit-btn">Sign up</button>
		</div>
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<form action="php/login.php" method="POST">
				<div class="form-holder">
						<input type="text" class="input" placeholder="Username" name="username" required>
						<input type="password" class="input" placeholder="Password" name="password" required>
				</div>
				<button type="submit" class="submit-btn">Log in</button>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="login/js/main.js"></script>	
</html>