<?php 
	$servername="localhost";
	$username="root";
	$password="";
    $dbname="blog1";
    
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if (isset($_GET["id"])) {
		$ids=$_GET["id"];
		$sql="DELETE FROM categorie WHERE id = $ids";

		mysqli_query($conn,$sql);

		header("Location:blog.php");
	}
 ?>