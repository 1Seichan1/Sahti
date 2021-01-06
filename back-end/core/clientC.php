<?php 
/**
 * 
 */
include_once ("config.php");

class clientC
{
	function ajouterClient($id_compte,$client){
		$sql="insert into client values (:id_compte,:cin,:nom,:prenom,:email,:adresse,:dateN)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$client->GetCin();
        $photo=$client->GetPhoto();
        $nom=$client->GetNom();
        $prenom=$client->GetPrenom();
        $email=$client->GetEmail();
        $adresse=$client->GetAdresse();
        $dateN=$client->GetDateN();

		$req->bindValue(':id_compte',$id_compte);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);		
		$req->bindValue(':prenom',$prenom);	
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dateN',$dateN);		

		
	


		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: ajouter client'.$e->getMessage());
        }
	}
	function afficherClient() {
		$db=config::getConnexion();
		$sql="select * from client";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function supprimerClient($cin){
		$sql="delete from client where cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: supprimer client'.$e->getMessage());
        }
	}
	function recupererClient($cin)
	    {
		$db=config::getConnexion();
		$sql="select * from client where cin='$cin'";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	function modifierClient($client){
		$sql="UPDATE client SET nom=:nom, prenom=:prenom, email=:email, adresse=:adresse, dateN=:dateN, dureeC=:dureeC, numcarte=:numcarte, mois=:mois, annee=:annee, CVC=:CVC WHERE cin=:cin";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$cin=$client->GetCin();
        $nom=$client->GetNom();
        $prenom=$client->GetPrenom();
        $email=$client->GetEmail();
        $adresse=$client->GetAdresse();
        $dateN=$client->GetDateN();
        $dureeC=$client->GetDureeC();
        $numcarte=$client->GetNumcarte();   
        $mois=$client->GetMois();
        $annee=$client->GetAnnee();
        $CVC=$client->GetCVC();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);		
		$req->bindValue(':prenom',$prenom);	
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':dateN',$dateN);		
        $req->bindValue(':dateN',$dateN);
        $req->bindValue(':dureeC',$dureeC);
        $req->bindValue(':numcarte',$numcarte);
        $req->bindValue(':mois',$mois);
        $req->bindValue(':annee',$annee);
        $req->bindValue(':CVC',$CVC);
		$req->execute();
        }
        catch (Exception $e){
            die ('Erreur: modifier client'.$e->getMessage());
        }
	}
}
?>