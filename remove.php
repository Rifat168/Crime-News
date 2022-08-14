<?php 

$db = mysqli_connect("localhost","root","", "project");

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE posts SET verify = 2 WHERE id = {$id}";

	$update = mysqli_query($db,$sql);

		if(! $update){
				die('Could not remove data: ' . mysqli_error($db));
			}else{
				echo "<script>alert('post removed for users');window.location='admin_home.php'</script>";
				
			}

	
}

?>