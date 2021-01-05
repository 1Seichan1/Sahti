<?PHP

include_once 'D:/xamp/htdocs/www/sahtinew/config.php' ;

class UsersC
{
 
    function Afficher_UsersC ()

    {
    $sql ='SELECT * FROM users';
    $db=config::getConnexion();
    try {
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_UsersC($UsersC)
    {
$sql="INSERT into users (username,email,password,create_datetime,usertype,phone) values(:username,:email,:password,:create_datetime,:usertype,:phone)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $username=$UsersC->getusername();
        $email=$UsersC->getemail();
        $password=$UsersC->getpassword();
        $create_datetime=$UsersC->getcreate_datetime();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $usertype=$UsersC->getusertype();
        $phone=$UsersC->getphone();


        $req->bindValue(':username',$username);
        $req->bindValue(':email',$email);
        $req->bindValue(':password',$hashed_password);
        $req->bindValue(':create_datetime',$create_datetime);
        $req->bindValue(':usertype',$usertype);
        $req->bindValue(':phone',$phone);
        $req->execute();
        
}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

    
    function Supprimer_UsersC($id)
    {
   $sql='DELETE FROM users Where id=:id';
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



    function modifier_UsersC($UsersC)
    {
       
            $sql="Update users set username=:username , email=:email  ,usertype=:usertype,phone=:phone  where id=:id";
            $db=config::getConnexion();
       
            try{
            $req =$db->prepare($sql);
            $id=$UsersC->getid();
            $username=$UsersC->getusername();
            $email=$UsersC->getemail();
            $usertype=$UsersC->getusertype();
            $phone=$UsersC->getphone();
    
    
            $req->bindValue(':id',$id);
            $req->bindValue(':username',$username);
            $req->bindValue(':email',$email);
            $req->bindValue(':usertype',$usertype);
            $req->bindValue(':phone',$phone);

            $req->execute();
        }
            catch( PDOException $e)
            { echo $e->getMessage();}

    }

 
}






?>