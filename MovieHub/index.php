<?php
	session_start();
	if (isset($_SESSION['username'])) {
		$temp=1;	
	}
	else{
		$temp = 0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="style.css?213">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<script src="https://kit.fontawesome.com/719270a6fc.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
	<script type="text/javascript" src="script.js?233"></script>
</head>
<body>

	<!-- preloader -->
	<div id="preloader">
		<div class="load"></div>
	</div>

	<div id="scrollDiv">
		<a href="#logoContainer"><i class="fa-sharp fa-solid fa-upload"></i></a>
	</div>

	<header class="header">
		<div id="logoContainer">
			<h2> MovieHub</h2>
		</div>
		<div id="btnContainer">
			<a href="#marvel"><button> Marvel </button></a>
			<a href="#bollywood"><button> BollyWood </button></a>
			<a href="#DC"><button> DC </button></a>
			<a href="#aboutus"><button> About Us </button></a>
			<a href="#contactus"><button> Contact Us </button></a>
			<?php if($temp==0){?>
			<a href="login.php"><button> Login </button></a>
			<?php } else { 
				echo "<button id='userBtn' onclick='showOptions()'>". $_SESSION['username']." </button>";
			}?>
		</div>

	</header>

			<div id="options">
			<a href="#profileDiv" id="showProfileBtn"> Profile </a>
			<a href="DB.php?e92=0"> LogOut </a>
		</div>

	<section id="profileDiv">
		
		<div id="proDetails">
			<form action="DB.php" method="post">
			<table>
				<tr>
					<td colspan="2" id="proImage"> <center><img src="../favicon.ico"  ></center> </td>
				</tr>

				<tr>
					<td class="labels"> Username : </td>
					<td> <input type="text" name="username" value="<?php echo $_SESSION['username']?>" class="editable" disabled></td>
				</tr>

				<tr>
					<td class="labels"> Email : </td>
					<td> <input type="text" name="email" value="<?php echo $_SESSION['email']?>" class="editable" disabled></td>
				</tr>

				<tr>
					<td> <input type="button" name="" value="Edit Profile" onclick="editProfile()"> </td>
					<td> <input type="submit" name="" > 
						 <input type="button" value="Close" onclick="closeProfile()">
					</td>
				</tr>

			</form>
			</table>
		</div>
	</section>

	<main>
		<div id="container">

			<section id="slideBar">
				<div id="scrollDown">
					<a href="#aboutus"><i class="fa-solid fa-arrow-down"></i></a>
				</div>
			</section>
			
	<section id="aboutus">
			<div id="aboutImage">
				<img src="https://i.ytimg.com/vi/06RX7Wh-_48/maxresdefault.jpg">
			</div>
			<div id="description" style="text-wrap:wrap;">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div id="chartNums">
					<div id="num1">
						<h3> Downloads</h3>
						<p> 2000+</p>
					</div>
					<div id="num2">
						<h3> Uploads </h3>
						<p> 10lakh+ </p>
					</div>
					<div id="num3">
						<h3> Users </h3>
						<p> 100k+</p>
					</div>
				</div>
		
</div>
			<div id="contact">
					<ul>
						<li><i class="fa-brands fa-facebook"></i></li>
						<li><i class="fa-brands fa-instagram"></i></li>
						<li><i class="fa-brands fa-google"></i></li>
						<li><i class="fa-brands fa-twitter"></i></li>
					</ul>
				</div>
			

			
				
	</section>
			

			<section id="marvel">
			
			<div class="Heading">
				<center><h2> Marvel Movies </h2></center>
			</div>

			<div class="movieContainer">
			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Avengers : Infinity war </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BYzE5MjY1ZDgtMTkyNC00MTMyLThhMjAtZGI5OTE1NzFlZGJjXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX140_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Deadpool </div>
			</div>
			
			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> The Avengers </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> End Game </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMzY2ODk4NmUtOTVmNi00ZTdkLTlmOWYtMmE2OWVhNTU2OTVkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UY209_CR6,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> The Amazing Spiderman-2 </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Spiderman : no way home </div>
			</div>
		</div>
			</section>


			<section id="bollywood">
				<div class="Heading">
				<center><h2> Bollywood Movies </h2></center>
				</div>

				<div class="movieContainer">
				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMjI2Njg2Y2EtZjgwMC00ZGVkLWJmMWYtYjVhYjk2ZTkwNWE1XkEyXkFqcGdeQXVyMTMxMjA5NDU1._V1_UY209_CR13,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> KGF-2 </div>
			</div>

				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BODUwNDNjYzctODUxNy00ZTA2LWIyYTEtMDc5Y2E5ZjBmNTMzXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_UY209_CR8,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> RRR </div>
			</div>

				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BZjY2MmI1ZWItNmU0Yy00NTdkLWJiYmQtNzFlZWNlMzkxZTZjXkEyXkFqcGdeQXVyNjkwOTg4MTA@._V1_UY209_CR13,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Brahmastra</div>
			</div>

				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BYWI2ODNjMDktZjcxNS00YThkLTljMDUtMGIyOTg3ZjY2MjlhXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_UY209_CR4,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Major </div>
			</div>

				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BN2M4NDM2NDItMzgzNy00OWRiLThhNjEtZDA2OWMyNTcwYzRjXkEyXkFqcGdeQXVyMTI1NDEyNTM5._V1_UY209_CR13,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Gangubai kathiawadi </div>
			</div>

				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BNDA5OWE3YTUtNjU0Mi00MWI0LTg3ODgtYmUwNzdkNTdiOWQ2XkEyXkFqcGdeQXVyOTI3MzI4MzA@._V1_UY209_CR8,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Bhedia </div>
			</div>
		</div>
			</section>

			<section id="DC">
				<div class="Heading">
				<center><h2> DC Movies </h2></center>
				</div>
				<div class="movieContainer">
				<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BOTY4YjI2N2MtYmFlMC00ZjcyLTg3YjEtMDQyM2ZjYzQ5YWFkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Batman Begins </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> The Dark Knight </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMTk4ODQzNDY3Ml5BMl5BanBnXkFtZTcwODA0NTM4Nw@@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> The Dark Knight </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BMTk5ODk1NDkxMF5BMl5BanBnXkFtZTcwNTA5OTY0OQ@@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Man of steel </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BYThjYzcyYzItNTVjNy00NDk0LTgwMWQtYjMwNmNlNWJhMzMyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName"> Batman v Superman : Dawn of justice </div>
			</div>

			<div class="movieBox">
				<div class="movieImage">
					<img src="https://m.media-amazon.com/images/M/MV5BYWVhZjZkYTItOGIwYS00NmRkLWJlYjctMWM0ZjFmMDU4ZjEzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY209_CR0,0,140,209_AL_.jpg">
				</div>
				<div class="movieName">	Justice League </div>
			</div>
		</div>
			</section>


			

			<section id="contactus">
				<div class="cont_Heading">
					<center><h2> Contact Us </h2></center>
				</div>
				<form>
					<div>
					<label for="name"> Name </label><br>
					<input id="name" type="text" name=""><br>
					</div>

					<div>
					<label for="email"> Email </label><br>
					<input id="email" type="email" name=""><br>
					</div>

					<div id="subject">
					<label for="subject"> Subject </label><br>
					<input type="text" name="" id="subject">
					</div>

					<div id="cont_description">
					<label for="fname"> Description </label><br>
					<textarea ></textarea><br>
					</div>

					<div id="cont_btn">
					<button id="submit"> Send </button>
					</div>
				</form>
			</section>
		</div>
	</main>
</body>

</html>