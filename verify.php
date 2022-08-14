<?php 

$db = mysqli_connect("localhost","root","", "project");

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE posts SET verify = 1 WHERE id = {$id}";

	$update = mysqli_query($db,$sql);

		if(! $update){
				die('Could not remove data: ' . mysqli_error($db));
			}else{
				echo "<script>alert('post is now verified');window.location='admin_home.php'</script>";
				
			}

	
}

?>