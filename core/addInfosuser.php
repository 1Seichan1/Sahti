<?php

include 'InfosC.PHP';
include '../Entities/Infos.php';
session_start();

if ( !empty($_POST['Taille'] )&& !empty($_POST['Poid']) && !empty($_POST['TypeSang'] ) && !empty($_POST['Region'] ) && !empty($_POST['Role'] )  )
{ 
 


    $Infos=new Infos (0,$_POST['Taille'],$_POST['Poid'],$_POST['TypeSang'],$_POST['Region'],$_POST['Role']);
    
    $InfosC=new InfosC();
    $InfosC->Ajouter_InfosC($Infos);
    echo "<script type='text/javascript'> document.location = './../view/front/profile.php'; </script>" ;
   
  
} else echo "error";
 

?>