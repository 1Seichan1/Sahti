<?php

 include 'model/rdv.php';	
 include 'model/specialite.php';	
 include 'model/patient.php';   
	
    isset($_REQUEST['id_rdv'])? $id_rdv=$_REQUEST['id_rdv']:$id_rdv=null;
    
    isset($_REQUEST['id_patient'])? $id_patient=$_REQUEST['id_patient']:$id_patient=null;
    
    isset($_REQUEST['id_specialite'])? $id_specialite=$_REQUEST['id_specialite']:$id_specialite=null;
	
	isset($_REQUEST['date'])? $date=$_REQUEST['date']:$date=null;
	
	isset($_REQUEST['time'])? $time=$_REQUEST['time']:$time=null;
	
	
	
    
    $p=new Rdv($id_rdv, $id_patient, $id_specialite, $date, $time);

	$s=new Specialite('', '');
	$pa=new Patient('', '', '', '', '', '','');

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
		{
			$p->add($cnx);
			echo "<script>window.location.href='admin.php?controller=rdv&action=index';</script>";
		}
		
		$specialites=$s->index($cnx);
		$patients=$pa->index($cnx);
		
        include 'view/rdv/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
		{
			$p->edit($cnx);
			echo "<script>window.location.href='admin.php?controller=rdv&action=index';</script>";
		}
		$specialites=$s->index($cnx);
		$patients=$pa->index($cnx);
        $rdv=$p->view($cnx);
        include 'view/rdv/edit.php';
    break;
    case  'index':
            $rdvs=$p->index($cnx);
        include 'view/rdv/index.php';
    break;
	case  'agenda':
            $rdvs=$p->index($cnx);
        include 'view/rdv/agenda.php';
    break;
    case  'delete':
            $p->delete($cnx); 
            //header('Location:index.php?controller=rdv&action=index');
			echo "<script>window.location.href='admin.php?controller=rdv&action=index';</script>";
        
    break; 
	default:
		if(isset($_REQUEST['add']))
		{
			$p->add($cnx);
			echo "<script>window.location.href='admin.php?controller=rdv&action=index';</script>";
		}
		
		$specialites=$s->index($cnx);
		$patients=$pa->index($cnx);
    }
?>


