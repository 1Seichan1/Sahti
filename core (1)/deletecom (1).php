<?php 
	$servername="localhost";
	$username="root";
	$password="";
    $dbname="sahti";
    
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if (isset($_GET["id"])) {
		$ids=$_GET["id"];
		$sql="DELETE FROM comm WHERE id = $ids";

		mysqli_query($conn,$sql);

		header("Location:blog.php");
	}
 ?>