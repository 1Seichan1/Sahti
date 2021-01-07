<?php
include_once "E:/xampp/htdocs/weeebbb/sahti/config.php";

class blogc {

     function addblog($ajout)
   { $sql="INSERT INTO  ajout (nom,titre_blog,description,image,categorie) 
        values (:nom,:titre_blog,:description,:image,:categorie)";


    $db=config::getConnexion();
    
    $query=$db->prepare($sql);
    $query->execute([
     
    
    'nom' =>$ajout->getNom(),
    'titre_blog' =>$ajout->getTitre_blog(),
    'description' =>$ajout->getDescription(),
    'image' =>$ajout->getImage(),
    'categorie' =>$ajout->getCategorie(),
 
    
    ]);
    
    	

   }
   

    function showblog()
    {
        $sql="SELECT * FROM ajout";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


   function deleteblog($id){
    $sql="DELETE FROM ajout WHERE id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}




function updateblog($blog, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare
        (
            'UPDATE blog SET 
                nom = :nom, 
                titre_blog = :titre_blog,
                description = :description,
                image=:image,
                categorie=:categorie,
                
            WHERE id = :id'
        );

        
        $query->execute([
            'nom' => $blog->getNom(),
            'titre_blog' => $blog->getTitre_blog(),
            'description' => $blog->getDescription(),
            'image' => $blog->getImage(),
            'categorie' => $blog->getCategorie(),
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function recupererblog($id){
    $sql="SELECT * from ajout where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $blog=$query->fetch();
        return $blog;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function recupererblog1($id){
    $sql="SELECT * from ajout where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        
        $ajout = $query->fetch(PDO::FETCH_OBJ);
        return $ajout;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}



}
class blogc3
{
    function addcom($com)
   { $sql="INSERT INTO  comm (com) values (:com)";


    $db=config::getConnexion();
    
    $query=$db->prepare($sql);
    $query->execute([
'com' =>$com->getcom()
    
 
    
    ]);
    
    	

   }
   

    function showcom()
    {
        $sql="SELECT * FROM comm";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


   function deletecom($id){
    $sql="DELETE FROM comm WHERE id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}




function updatecom($blog, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare
        (
            'UPDATE blog SET 
                com = :com, 
               
                
            WHERE id = :id'
        );

        
        $query->execute([
            'com' => $blog->getcom(),
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}



}




class blogc2
{
    function addcat($categorie)
   { $sql="INSERT INTO  categorie (cat) values (:cat)";


    $db=config::getConnexion();
    
    $query=$db->prepare($sql);
    $query->execute([
'cat' =>$categorie->getcat()
    
 
    
    ]);
    
    	

   }
   

    function showcat()
    {
        $sql="SELECT * FROM categorie";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    


   function deletecat($id){
    $sql="DELETE FROM categorie WHERE id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}




function updatecat($blog, $id){
    try {
        $db = config::getConnexion();
        $query = $db->prepare
        (
            'UPDATE blog SET 
                cat = :cat, 
               
                
            WHERE id = :id'
        );

        
        $query->execute([
            'cat' => $blog->getCat(),
            'id' => $id
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}



}



?>