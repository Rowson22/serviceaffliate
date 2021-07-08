<!DOCTYPE html>
<html lang="en">
<head>
	<title>ServiceExpert</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		* {
	box-sizing: border-box;
}

body {
	font-family: Arial, Helvetica, sans-serif;
	margin: 0;
}

/* Style the header */
.header {
	padding: 80px;
	text-align: center;
	background: #1abc9c;
	color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
	font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
	overflow: hidden;
	background-color: #333;
}
 
/* Style the navigation bar links */
.navbar a {
	float: left;
	display: block;
	color: white;
	text-align: center;
	padding: 14px 20px;
	text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
	float: right;
}

/* Change color on hover */
.navbar a:hover {
	background-color: #ddd;
	color: black;
}

/* Column container */
.row {  
	display: flex;
	flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
	flex: 30%;
	background-color: #f1f1f1;
	padding: 20px;
}

/* Main column */
.main {   
	flex: 70%;
	background-color: white;
	padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
	background-color: #aaa;
	width: 100%;
	padding: 20px;
}

/* Footer */
.footer {
	padding: 20px;
	text-align: center;
	background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
	.row {   
		flex-direction: column;
	}
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
	.navbar a {
		float: none;
		width:100%;
	}
}



		/* Remove the navbar's default rounded borders and increase the bottom margin */ 
		.navbar {
			margin-bottom: 50px;
			border-radius: 0;
		}
		
		/* Remove the jumbotron's default bottom margin */ 
		 .jumbotron {
			margin-bottom: 0;
		}
	 
		/* Add a gray background color and some padding to the footer */
		footer {
			background-color: #f2f2f2;
			padding: 25px;
		}
	</style>
</head>
<body>

<div class="jumbotron">
	<div class="container text-center">
		<h1>ServiceAffliate</h1>      
		<p>Mission, Vission & Values</p>
	</div>
</div>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li ><a href="talent.php">Find Talent</a></li>
				<li ><a href="work.php">Find Work</a></li>
				<li><a href="whywork.php">Why Work SA</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login/login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
				<li><a href="login/register.php"><span class="glyphicon glyphicon-ur"></span> Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<!--Homepage-->

</head>
<body>


<div class="row">
	<div class="side">
		<h2>About </h2>
		<h5>Photo </h5>
		<div class="fakeimg" style="height:200px;">Image</div>
		<p>Some text about me in culpa qui officia deserunt mollit anim..</p>
		<h3>More Text</h3>
		<p>Lorem ipsum dolor sit ame.</p>
		<div class="fakeimg" style="height:60px;">Image</div><br>
		<div class="fakeimg" style="height:60px;">Image</div><br>
		<div class="fakeimg" style="height:60px;">Image</div>
	</div>

	<div class="main">
		<h2>TITLE HEADING</h2>
		<h5>Title description, May 21 , 2022</h5>
		<div class="fakeimg" style="height:200px;">Image</div>
		<p>Some text..</p>
		<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		<br>
		<h2>TITLE HEADING</h2>
		<h5>Title description, May 21, 2021</h5>
		<div class="fakeimg" style="height:200px;">Image</div>
		<p>Some text..</p>
		<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
	</div>
</div>



</body>
</html>

<!--EndHomepage-->
<br><br>

<footer class="container-fluid text-center">
	<p>ServiceAffliate Copyright</p>  
	<form class="form-inline">Send Message:
		<input type="email" class="form-control" size="50" placeholder="Email Address">
		<button type="button" class="btn btn-danger">Sign Up</button>
	</form>
</footer>

</body>
</html>
