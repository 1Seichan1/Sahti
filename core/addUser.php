<?php

include 'UsersC.PHP';
include '../Entities/Users.php';
session_start();
var_dump($_POST['UserName'],$_POST['Password']);
if ( !empty($_POST['UserName'] )&& !empty($_POST['Email']) && !empty($_POST['Password'] ) && !empty($_POST['UserType'] ) && !empty($_POST['Phone'] )  )
{ 
    $create_datetime = date("Y-m-d H:i:s");


    $Users=new Users (0,$_POST['UserName'],$_POST['Email'],$_POST['Password'],$create_datetime,$_POST['UserType'],$_POST['Phone']);
    
    $UsersC=new UsersC();
    $UsersC->Ajouter_UsersC($Users);
    echo "<script type='text/javascript'> document.location = '../view/back/basic_table.php';
    alert ('user added'); </script>";
  
} else echo "wrong password";
 

?>