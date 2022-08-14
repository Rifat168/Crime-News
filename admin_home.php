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
     
        <li class="login"><a href="login.php">Sign out</a></li>

      </ul>
	</div>
  </header>
  
  
    <?php 
    $db = mysqli_connect("localhost","root","", "project");
       
       $sql = 'SELECT * FROM posts ORDER BY id DESC';
       $result = mysqli_query( $db , $sql);
       
       while($row = mysqli_fetch_array($result)) {
        echo "<div style='background-color:black;
        border-radius: 15px;
		border: 3px solid #FBFCFC;
        padding: 15px;
        'id=img_div >";
          echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="250px" width="300px"/>';
                
          echo"<p style='color:white;'>Time : ".$row['time']." || Date : ".$row['date'];
              
          if($row['verify']==1){
            echo"<h2 style='color:yellow;'>Verified By Admin</h2>";
          }elseif($row['verify']==2){
            echo"<h2 style='color:yellow;'>Removed By Admin For Users</h2>";
          }else{echo"<h2 style='color:yellow;'>Has Not Verified Yet</h2>";}
          echo"<h2 style='color:#2ECC71;'>Posted by : ".$row['anon_name']."</h2>";
          echo"<p style='color:#F15566;font-size:35px;'>Title : ".$row['title']."</p>";
          echo"<p style='color:#F39C12;font-size:20px;'><u>Information :</u> ".$row['information']. "</p>";
          
          
          echo"<form action='remove.php' method='post'>
                <input type='hidden' name='id' value='".$row['id']."' />
                <a href='remove.php'><button 
				style='color:white;  
				padding: 7px;
				background: #FD0000;
				border-radius: 15px;
				border: 2px solid #FD0000;
				font-size: 19px;
				float: right;' type='submit'>Remove</button></a>              
            </form>";

            echo"<form action='verify.php' method='post'>
                <input type='hidden' name='id' value='".$row['id']."' />
                <a href='verify.php'><button 
				style='color:white;  
				padding: 7px;
				background: #49CCFF;
				border-radius: 15px;
				border: 2px solid #49CCFF;
				font-size: 19px;
				float: right;'
				type='submit'>Verified</button></a>
            </form>";
        
              echo "</div>";

           
       } 
     
       
    ?>

 
  
  </body>
</html>