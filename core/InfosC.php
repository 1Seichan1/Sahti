<?PHP


include_once 'D:/xamp/htdocs/www/sahtinew/config.php' ;

class InfosC
{
 
    function Afficher_InfosC ()

    {
    $sql ='SELECT * FROM medical';
    $db=config::getConnexion();
    try {
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_InfosC($InfosC)
    {
$sql="INSERT into medical (taille,Poid,TypeSang,Region,Role) values(:taille,:Poid,:TypeSang,:Region,:Role)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $taille=$InfosC->gettaille();
        $Poid=$InfosC->getPoid();
        $TypeSang=$InfosC->getTypeSang();
        $Region=$InfosC->getRegion();
        $Role=$InfosC->getRole();
   


        $req->bindValue(':taille',$taille);
        $req->bindValue(':Poid',$Poid);
        $req->bindValue(':TypeSang',$TypeSang);
        $req->bindValue(':Region',$Region);
        $req->bindValue(':Role',$Role);

        $req->execute();
        
}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

    
    function Supprimer_InfosC($id)
    {
   $sql='DELETE FROM medical Where id=:id';
$db =config ::getConnexion();
try {   
       
        $req=$db->prepare($sql); 
        $req->bindValue(':id',$id);
        $req->execute();
       

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }



    function modifier_InfosC($InfosC)
    {

            $sql="Update medical set taille=:taille , poid=:poid ,region=:region ,typesang=:typesang  where id=:id";
            $db=config::getConnexion();
       
            try{
            $req =$db->prepare($sql);
            $id=$InfosC->getid();
            $taille=$InfosC->gettaille();
            $Poid=$InfosC->getPoid();
            $typesang=$InfosC->gettypesang();
            $region=$InfosC->getRegion();
            var_dump($id);
            var_dump($taille);
            var_dump($Poid);
            var_dump($typesang);
            var_dump($region);
            
            $req->bindValue(':id',$id);
            $req->bindValue(':taille',$taille);
            $req->bindValue(':Poid',$Poid);
            $req->bindValue(':typesang',$typesang);
            $req->bindValue(':region',$region);
            $req->execute();
        }
            catch( PDOException $e)
            { echo $e->getMessage();}

    }

 
}






?>