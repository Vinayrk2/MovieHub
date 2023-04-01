<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login | Moviehub </title>
</head>
<body>
<div id="container">
	<form action="DB.php" method="post">
		<table>
			<tr>
				<td> Email :</td>
				<td> <input type="text" name="email"></td>
			</tr>

			<tr>
				<td> Password :</td>
				<td> <input type="password" name="password"></td>
			</tr>

			<!-- <input type="hidden" name="username" value="Hello"> -->
			<tr>
				<input type="hidden" name="query">
				<td> <input type="reset" name=""></td>
				<td> <input type="submit" name=""></td>
			</tr>
		</table>
	</form>

	<form action="DB.php" method="post">
		<table>
			<tr>
				<td> Name :</td>
				<td> <input type="text" name="username"></td>
			</tr>

			<tr>
				<td> Email :</td>
				<td> <input type="email" name="email"></td>
			</tr>

			<tr>
				<td> Password :</td>
				<td> <input type="password" name="password"></td>
			</tr>

			

			<!-- <input type="hidden" name="username" value="Hello"> -->
			<tr>
				<input type="hidden" name="query">
				<td> <input type="reset" name=""></td>
				<td> <input type="submit" name=""></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>