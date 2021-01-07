<?php
session_start();
include "UsersC.php";
include "../Entities/Users.PHP";
if ( !empty($_POST['UserName'] )&& !empty($_POST['Email'])  && !empty($_POST['UserType'] ) && !empty($_POST['Phone'] )  )
{ 
$create_datetime = date("Y-m-d H:i:s");

$UsersC=new UsersC();
$Users=new Users ($_POST['idd'],$_POST['UserName'],$_POST['Email'],"0",$create_datetime,$_POST['UserType'],$_POST['Phone']);
 $UsersC->modifier_UsersC($Users);
 $_SESSION['username'] = $_POST['UserName'];
 $_SESSION['email'] = $_POST['Email'];
 $_SESSION['usertype'] = $_POST['UserType'];
 $_SESSION['phone'] = $_POST['Phone'];
 echo "<script type='text/javascript'> document.location = './../view/front/profile.php'; </script>";

} else 
echo "error";








?>