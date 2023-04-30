<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"] {
			padding: 5px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: none;
			border: 1px solid #ccc;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        .nature{
            background-color: #ffffff;
            margin: 10px auto;
            max-width: 300px;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #888888;
            height: 230px;
        }
	</style>
</head>
<body>
    <div class="nature">
	<h1>Login Form</h1>
	<form action="login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" value="Login">
        <input type="submit" value="Sign Up">
	</form>
    </div>
</body>
</html>
