<!DOCTYPE html>
<html>
 <head>
  <title> "Crime News" </title>
  <link rel="stylesheet" href="css/css.css">
  <script src="js/js.js"> </script>
 </head>
 
<body class="body">

  <header class="header1">
	
	<div class="nav">
	 <img src="img/download.jpg" width="280px" height="180px"> 
      <ul>
       <li class="home"><a href="index.php">Home</a></li>
        <li class="news"><a href="News.php">Post</a></li>
        <li class="contact"><a href="Contact.php">Contact</a></li>
        <li class="about"><a href="About.php">About</a></li>
        <li class="login"><a href="login.php">Admin</a></li>
      </ul>
	</div>
  </header>
  
<form name='post' class="admin_frm" action="admin_home.php" onsubmit="return validateForm()" method="post">
		<center><img src="img/admin.png" width="180px" height="150px"></center>
			<ul>
			<li><input  type="password" class ="box_admin" placeholder="Enter Username" name="username" required></li>
			<li><input  type="password" class ="box_admin" placeholder="Enter Password" name="passid" required></li>

			<li><input class="admin_sub" type="submit" value="Sign in" name="Submit"></li>
			</ul>

		</form>
  
  
  </body>
</html>