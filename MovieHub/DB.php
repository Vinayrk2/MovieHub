<?php
		
	// if (isset($_SESSION['username']) {
		session_start();
	// }
	
	function createSession($name,$email){
		session_start();
		$_SESSION['username'] = $name;
		$_SESSION['email'] = $email;
	}

	function getConnection(){
		$username = "root";
		$password = "";
		$host = "localhost:8080";
		$db = "MovieHub";

		$conn = new mysqli($host,$username,$password,$db);

		return $conn;
	}

	function findUser(){
		$conn = getConnection();
		$email = $_SESSION['email'];

		$sql = "select ID from users where Email = '$email'";
		// echo $sql;
		$record = $conn->query($sql);

		if ($record == null || $record == "") {
			return false;
		}
		else{
			return $record->fetch_row()[0];
		}

		$conn->close();
	}

	function signUp(){
		$conn = getConnection();
		$name = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$sql = "insert into users (Username,Email,Password) values ('$name','$email','$password')";

		try {
			$conn->query($sql);	
			echo "Registered Successfully";
			createSession($name,$email);
			header("location:index.php");
		} catch (Exception $e) {
			echo "User Already Exists";
		}
		
	}

	function SignIn(){
		$conn = getConnection();
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select Username from users where Email='$email' AND Password = '$password'";

		$record = $conn->query($sql);

		if ($record->num_rows == 0) {
			echo "Please Enter Valid Email & Password";
		}
		else{
			createSession($record->fetch_row()[0],$email);
			header("location:index.php");
		}
		$conn->close();
	}

	function UpdateProfile(){
		$username = $_POST['username'];
		$email = $_POST['email'];

		$conn = getConnection();
		$sql = "UPDATE users SET Username='$username',Email='$email' WHERE ID=".findUser();
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		echo $sql;
		try{
			$conn->query($sql);
		}catch(Exception $e){
			echo $e;
		}
	}

	function switcher(){

		echo $_POST['email'];
		// echo $_POST['password'];
		echo $_POST['username'];

		if(isset($_GET['e92']) && $_GET['e92'] == 0){
			session_destroy();
			header("location:index.php");
		}

		else if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
			SignUp();
			// echo "SignUp()";
		}

		else if(isset($_POST['username']) && isset($_POST['email'])){
			UpdateProfile();
		}

		else if (isset($_POST['email']) && isset($_POST['password'])) {
			// echo "SignIn()";
			SignIn();
		}
		else if(!(isset($_POST['username']) || isset($_POST['password']))){
			echo "Bad Request";
		}

	}
	switcher();
?>