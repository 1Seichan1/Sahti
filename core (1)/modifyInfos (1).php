<?php

include "InfosC.php";
include "../Entities/Infos.PHP";
if ( !empty($_POST['Taille'] )&& !empty($_POST['poid'])  && !empty($_POST['typesang'] ) && !empty($_POST['region'] )  )
{ 


$InfosC=new InfosC();
$Infos=new Infos ($_POST['idd'],$_POST['Taille'],$_POST['poid'],$_POST['typesang'],$_POST['region'],"0");
 $InfosC->modifier_InfosC($Infos);

} else 
echo "error";








?>