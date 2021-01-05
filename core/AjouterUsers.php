<?php

include 'UsersC.PHP';
include '../Entities/Users.php';
session_start();

if ( !empty($_POST['UserName'] )&& !empty($_POST['Email']) && !empty($_POST['Password'] ) && !empty($_POST['UserType'] ) && !empty($_POST['Phone'] )  )
{ 
    $create_datetime = date("Y-m-d H:i:s");


    $Users=new Users (0,$_POST['UserName'],$_POST['Email'],$_POST['Password'],$create_datetime,$_POST['UserType'],$_POST['Phone']);
    
    $UsersC=new UsersC();
    $UsersC->Ajouter_UsersC($Users);
    echo "<script type='text/javascript'> document.location = '../view/front/register.php';
    alert ('user added'); </script>";
   // header ('Location : ../View/AfficherEmploye.PHP');

}else if(!empty($_POST['UserName'] )&& !empty($_POST['Password'] ) ){
    $username=$_POST['UserName'];
    $db=config::getConnexion();

    $query    = "SELECT * FROM `users` WHERE username='$username'";
    
    $liste=$db->query($query);
    $password=$_POST['Password'];
foreach($liste as $i )
{
$hashed_password = $i['password'];
if(password_verify($password, $hashed_password)) {
         $_SESSION['username'] = $username;
         $_SESSION['id'] = $i['id'];
         $_SESSION['email'] = $i['email'];
         $_SESSION['usertype'] = $i['usertype'];
         $_SESSION['phone'] = $i['phone'];
       
         if($i['usertype']=='patient')
            header("Location: ../view/front/index.php");
            else
                        header("Location: ../view/back/index.php");

        
}   

 
}} else {echo "wrong password";
header("Location: ../view/front/register.php");}



?>