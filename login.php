<?php
$connection = mysqli_connect('localhost', 'root', '', 'login');
if ($connection == false) {
	echo "FAILED";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pasd = $_POST['password'];
	$sql = "INSERT INTO user(name, email, password) VALUES('$name', '$email', '$pasd' );";

	$utils = mysqli_query($connection, $sql);
	if ($utils == true) {
		echo "Inserted";
	} else {
		echo $connection->error;
	}
	mysqli_close($connection);
}
?>

<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS file Included -->
	<link rel="stylesheet" type="text/css" href="login.css">

	<!-- JavaScript file included -->
	<script src="login.js"></script>
	<script>
		function myFunction() {
			alert("Congratulatons!! Signed Up successfully.");
			alert("Now you can login through your credentials.");
		}
	</script>
</head>

<body>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Sign Up</h1>
			<span>Use your account</span>
			<input type="name" placeholder="Name" name="name" required>
			<input type="email" placeholder="Email" name="email" required>
			<input type="password" placeholder="Password" name="password" required>
			<button onclick="myFunction()">SignUp</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hey Gamer!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="LogIn"><a href="hello.html">Log In</a></button>
			</div>
		</div>
	</div>
</body>

</html>