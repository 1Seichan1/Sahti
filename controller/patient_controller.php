<?php

 include 'model/patient.php';	
    
    isset($_REQUEST['id_patient'])? $id_patient=$_REQUEST['id_patient']:$id_patient=null;
	
	isset($_REQUEST['name'])? $name=$_REQUEST['name']:$name=null;
    
    isset($_REQUEST['cin'])? $cin=$_REQUEST['cin']:$cin=null;
    
    isset($_REQUEST['email'])? $email=$_REQUEST['email']:$email=null;
	
	isset($_REQUEST['region'])? $region=$_REQUEST['region']:$region=null;
	
	isset($_REQUEST['tel'])? $tel=$_REQUEST['tel']:$tel=null;
	
	isset($_REQUEST['type_sang'])? $type_sang=$_REQUEST['type_sang']:$type_sang=null;
	
	
    
    $p=new Patient($id_patient, $name, $cin, $email, $region, $tel,$type_sang);

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
		{
			$p->add($cnx);
			echo "<script>window.location.href='admin.php?controller=patient&action=index';</script>";
		}
        include 'view/patient/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
		{
			$p->edit($cnx);
			echo "<script>window.location.href='admin.php?controller=patient&action=index';</script>";
		}
        $patient=$p->view($cnx);
        include 'view/patient/edit.php';
    break;
    case  'index':
            $patients=$p->index($cnx);
        include 'view/patient/index.php';
    break;
    case  'delete':
            $p->delete($cnx); 
            //header('Location:index.php?controller=patient&action=index');
			echo "<script>window.location.href='admin.php?controller=patient&action=index';</script>";
        
    break;        
    }
?>


