<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="css/custom.css" rel="stylesheet">
      <script src="js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
   <title>Login Page</title>
   <style> 
      .main-content{
   width: 50%;
   border-radius: 20px;
   box-shadow: 0 5px 5px rgba(0,0,0,.4);
   margin: 5em auto;
   display: flex;
}
.company__info{
   background-color: #666666;
   border-top-left-radius: 20px;
   border-bottom-left-radius: 20px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   color: #fff;
}
.fa-android{
   font-size:3em;
}
@media screen and (max-width: 640px) {
   .main-content{width: 90%;}
   .company__info{
      display: none;
   }
   .login_form{
      border-top-left-radius:20px;
      border-bottom-left-radius:20px;
   }
}
@media screen and (min-width: 642px) and (max-width:800px){
   .main-content{width: 70%;}
}
.row > h2{
   color:#666666;
}
.login_form{
   background-color: #fff;
   border-top-right-radius:20px;
   border-bottom-right-radius:20px;
   border-top:1px solid #ccc;
   border-right:1px solid #ccc;
}
form{
   padding: 0 2em;
}
.form__input{
   width: 100%;
   border:0px solid transparent;
   border-radius: 0;
   border-bottom: 1px solid #aaa;
   padding: 1em .5em .5em;
   padding-left: 2em;
   outline:none;
   margin:1.5em auto;
   transition: all .5s ease;
}
.form__input:focus{
   border-bottom-color: #666666;
   box-shadow: 0 0 5px rgba(0,80,80,.4); 
   border-radius: 4px;
}
.btn{
   transition: all .5s ease;
   width: 70%;
   border-radius: 30px;
   color:#666666;
   font-weight: 600;
   background-color: #fff;
   border: 1px solid #666666;
   margin-top: 1.5em;
   margin-bottom: 1em;
}
.btn:hover, .btn:focus{
   background-color: #666666;
   color:#fff;
}
   </style>
</head>
<body>
   <!-- Main Content -->
   <div class="container-fluid">
      <div class="row main-content bg-success text-center">
         <div class="col-md-4 text-center company__info">
            <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
            <h4 class="company_title">ServiceAffliate</h4>
         </div>
         <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
               <div class="row">
                  <h2>Log In</h2>
               </div>
               <div class="row">
                  <form method="post" action="login.php" control="" class="form-group">
                     <div class="row">
                        <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                     </div>
                     <div class="row">
                        <!-- <span class="fa fa-lock"></span> -->
                        <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                     </div>
                     <div class="row">
                        <input type="checkbox" name="remember_me" id="remember_me" class="">
                        <label for="remember_me">Remember Me!</label>
                     </div>
                     <div class="row">
                        <input type="submit" name="loginBtn" value="Submit" class="btn">
                     </div>
                  </form>
                   <?php
                  if(isset($_POST['loginBtn'])) {
                     $conn = mysqli_connect("localhost", "root", "", "hacking_db");
                     if(!$conn){
                        die("connection error");
                     }
                     $username = mysqli_real_escape_string($conn, $_POST['username']);
                     $password = mysqli_real_escape_string($conn, $_POST['password']);

                     if(trim($username) == '') {
                        echo "Username can not be left empty!";
                     }
                     else if(trim($password) == '') {
                        echo "Password can not be left empty!";
                     }

                     else{
                        // $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT) ;
                        $verify_sql = "select * from `userslogin` where username='$username' and password='$password'";
                        $result = mysqli_query($conn,$verify_sql);

                        $row = mysqli_fetch_array($result);

                        if(mysqli_num_rows($result) > 0){

                           // if (password_verify($password, $row['password'])) {
                              $_SESSION['session_username'] = $username;
                              header('Location: dashboard.php');
                           // }
                           /*else {
                              echo 'Incorrect password, please try again!';
                           }*/
                        }
                        else{
                           echo "No user exists, please register to continue!";
                        }
                        mysqli_close($conn);

                     }
                  }
               ?>


               </div>
               <div class="row">
                  <p>Don't have an account? <a href="register.php">Register Here</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer -->
   <div class="container-fluid text-center footer">
    <a href="https://bit.ly/">.</a></p>
   </div>
</body>
</html>