<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	 <meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

 <style>
   		body {
  background-color: #303030;
  font-family: calibri;
}
 </style>
</head>
<body>
<nav class="navbar navbar-expand-md  navbar-dark fixed-top" style="background-color: black">
  <a class="navbar-brand" href="home.php">
  	<img src="images/logo.png" class="logo">
     
  </a>
</nav>
<div class="container" style="margin-top: 150px">
<h1 class="text-center" >Admin Panel</h1>
        <div class="card card-container bg-dark">

            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="adminhasan.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="POST" action="authenticate_admin.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="login_id" class="form-control" placeholder="login_id" name="login_id" required autofocus>
                <br>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
              <br>
                  
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
  
</body>
</html>