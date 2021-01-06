<?php

 include 'model/specialite.php';	
    
    isset($_REQUEST['id_specialite'])? $id_specialite=$_REQUEST['id_specialite']:$id_specialite=null;
    
    isset($_REQUEST['name'])? $name=$_REQUEST['name']:$name=null;
	
	
    
    $p=new Specialite($id_specialite, $name);

    switch($action){
    case 'add':
        if(isset($_REQUEST['add']))
		{
			$p->add($cnx);
			echo "<script>window.location.href='admin.php?controller=specialite&action=index';</script>";
		}
        include 'view/specialite/add.php';
    break;
    case  'edit':
        if(isset($_REQUEST['edit']))
		{
			$p->edit($cnx);
			echo "<script>window.location.href='admin.php?controller=specialite&action=index';</script>";
		}
        $specialite=$p->view($cnx);
        include 'view/specialite/edit.php';
    break;
    case  'index':
            $specialites=$p->index($cnx);
        include 'view/specialite/index.php';
    break;
    case  'delete':
            $p->delete($cnx); 
            //header('Location:index.php?controller=specialite&action=index');
			echo "<script>window.location.href='admin.php?controller=specialite&action=index';</script>";
        
    break;        
    }
?>


