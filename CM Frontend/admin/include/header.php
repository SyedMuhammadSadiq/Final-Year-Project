

<!DOCTYPE html>
<html lang="en">
<head>
  <title ></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 500px;
  width: 230px;
  
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
   position: absolute;
  margin-top: 70px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  
  color: #f1f1f1;
  display: block;

}

.sidenav a:hover {
color: #818181;
}

.main {
  margin-left: 230px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


</style>
		 
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: #43870c">
  <div class="container-fluid">
    <div class="navbar-header" style="padding: 3px;" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"  >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="index.php" style="color: #f1f1f1;">Comfort Mart | Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
      	<div class="dropdown"><br>
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" >Admin
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
    	        <li><a href="change_password.php"><span class="glyphicon glyphicon-lock"></span>Change Password</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
     
    </ul>
  </div>

      </ul>
    </div>
  </div>
</nav>
 
 


</body>
</html>


 
 