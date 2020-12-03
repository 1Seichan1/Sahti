<?php
include_once "E:/xampp/htdocs/weeebbb/blog1/config.php";

class blogc {

    public function showblog()
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


   public function addblog($ajout)
   {

    $sql="insert into ajout (nom,titre_blog,description) values (:nom,:titre_blog,:description)";


    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
     
    
    'nom' =>$ajout->getnom(),
    'titre_blog' =>$ajout->gettitre_blog(),
    'description' =>$ajout->getdescription()
 
    
    ]);
    


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
                description = :description
                
            WHERE id = :id'
        );
        $query->execute([
            'nom' => $blog->getnom(),
            'titre_blog' => $blog->gettitre_blog(),
            'description' => $blog->getdescription(),
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

        $user=$query->fetch();
        return $user;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}



}



?>