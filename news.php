<!DOCTYPE html>
<html>
 <head>
  <title> "Crime News" </title>
  <link rel="stylesheet" href="css/css.css">
  <script src="js/js.js"></script>
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
  
  <body class="body">
 
	<div style="float:left;">
			<form name='post' class="frm" onsubmit="return validateForm()"  action= "News.php" method="post" enctype="multipart/form-data">
			<ul>
            <li><input class ="box" type="file" name="image" accept="image" required></li>
			<li><input type="text" class ="box" placeholder="Enter Your Anonymous Name" name="anon_name" required></li>
			<li><input for="Title" type="text" class ="box" placeholder="Enter Title" name="title" required></li>
            <li><textarea rows="8" cols="80" name="text" class ="box"  placeholder="Enter text here ...." required></textarea><br></li>
			<li><input class="sub" type="submit" name="Post" value="Upload"></li>
			</ul>

		</form>
	</div>

	<div style="float:left;" class="note">
	<p><strong>[Note]:</strong> Please don't make fake news or fake report.Our administration will check and varify every post. 
	False posts will be deleted for users and we can track the false reporters.</p>
	</div>

	</body>
	
	
	 <?php

$db = mysqli_connect("localhost","root","","project");

		if(isset($_POST["Post"])){

			$image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

			$anon_name= mysqli_real_escape_string($db,$_POST['anon_name']);
			$title= mysqli_real_escape_string($db,$_POST['title']);
			$info= mysqli_real_escape_string($db,$_POST['text']);

			date_default_timezone_set('Asia/Dhaka');

			$time= date('h:i A');
			$date= date('Y:m:d');
					
			$img_type=$_FILES["image"]["type"];
			$img_size=$_FILES["image"]["size"];

			if($img_size > 1048576 ){
				echo "<script>alert('Image is bigger then 1MB');window.location='News.php'</script>";
			}else{
				$sql = "INSERT INTO posts (anon_name,title,information,image,time,date,verify) 
				VALUES('$anon_name','$title','$info','$image','$time','$date',0) ";
			}
			
			
		$update = mysqli_query($db,$sql);
			
			if(! $update){
				die('Could not update data: ' . mysqli_error($db));
			}else{
				echo "<script>alert('post updated');window.location='index.php'</script>";
				
			}
					

		}
		
		
?>
	
	
  
 </body>
</html>