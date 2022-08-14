<!DOCTYPE html>
<html>
 <head>
  <title> "Crime News" </title>
  <link rel="stylesheet" href="css/css.css">
 </head>
 
<body class="body">

  <header class="header1">
	
	<div class="nav">
	 <img src="img/download.jpg" width="280px" height="180px"> 
      <ul>
        <li class="home"><a href="index.php">Home</a></li>
        <li class="news"><a  href="News.php">Post</a></li>
        <li class="contact"><a href="Contact.php">Contact</a></li>
        <li class="about"><a href="About.php">About</a></li>
        <li class="login"><a href="login.php">Admin</a></li>

      </ul>
	</div>
  </header>
<center style="color:white"><h1><u>"Crime News"</u></h1></center>




    <?php 
    $db = mysqli_connect("localhost","root","", "project");
        
       $sql = "SELECT * FROM posts WHERE verify = 0 or verify=1 ORDER BY id DESC";
       $result = mysqli_query( $db , $sql);
      
       while($row = mysqli_fetch_array($result)) {
        echo "<div style='background-color:#2E4053;
		border-radius: 15px;
		border: 3px solid #FBFCFC;
		padding: 15px;
		'id=img_div >";
              echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="250px" width="300px"/>';
               echo"<p style='color:white;'>Time : ".$row['time']." || Date : ".$row['date'];
              
              if($row['verify']==1){
                echo"<h2 style='color:yellow;'>Verified By Admin</h2>";
              }
			  
			  else
			  {echo"<h2 style='color:yellow;'>Has Not Verified Yet</h2>";}
		  
              echo"<h2 style='color:#2ECC71;'>Posted By : ".$row['anon_name']."</h2>";
              echo"<p style='color: #F15566;font-size:35px;'>Title : ".$row['title']."</p>";
              echo"<p style='color:#F39C12;font-size: 20px;'><u>Information  :</u> ".$row['information']."</p>";
              
  
            echo "</div>";

            
           
       } 
       
       
    ?>

  



 </body>	
</html>