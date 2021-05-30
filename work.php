<!DOCTYPE html>
<html lang="en">
<head>
  <title>ServiceAffliate</title>
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
}

/* Style the header */
header {
  background-color: #444;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
h2 {
  font-size:  20px;
}

/* Create two columns/boxes that floats next to each other */
navf{
  float: left;
  width: 30%;
  height:  1200px;
-  background: #ccc;
  padding: 20px;
  margin:   0px 10px 0px 24px;
}

/* Style the list inside the menu */
nav ulf {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 65%;
  background-color: #f1f1f1;
  margin:   0px 10px 0px 10px;
   
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  navf, article {
    width: 100%;
    height: auto;
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
    .search{
      margin: 10px 0px 0px 24px;
    }
    .search{

    }
    .list-border {
            border-bottom: solid; 
            border-width: 1px;
            border-spacing:15px;
            border-collapse: separate;
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
        <li><a href="index.php">Home</a></li>
        <li><a href="talent.php">Find Talent</a></li>
        <li class="active"><a href="work.php">Find Work</a></li>
        <li><a href="whywork.php">Why Work SA</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--layout-->


</head>
<body>

<header>
  <h2>Find Talent</h2>
</header>
<div class="input-group">
  <div class="search">
        <!-- declaration for first field -->
        <input type="text" class="form-control 
                input-sm" size="120" placeholder="Search" />
   </div>
        <!-- reducong the gap between them to zero -->
        <span class="input-group-btn" 
            style="width:0px;"></span>
  
        <!-- declaration for second field -->
        <input type="text" class="form-control 
                input-sm" value="" size="120" placeholder="Online Job" />

                <span class="input-group-btn" 
            style="width:0px;"></span>
            <div class="search">     <button>Search</button>
              </div>



</div>

<section>
  <navf>
    <h7>Fliter By</h7>
    <ul>
      <li><a href="#">Location</a></li>
      <li><a href="#">Time</a></li>
      <li><a href="#">Skill</a></li>
    </ul>
  </navf>
  
  <article>
    
    <div class="list-border"> 
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Resume Writing</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Resume Help</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    <div class="list-border">
      <h2>Content writer 6 days left</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>

     <div class="list-border">
      <h2>Aritcle writing</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>

    <div class="list-border">
      <h2>Aritcle writing</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    
    Standing on the River Thames, London has been a major settlement for two millennia, its history going back tans, who named it Londinium.<button>bid now</button>
  </p>
    </div>
    
  </article>
</section>


</body>
</html>

<!--endLayout-->
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
