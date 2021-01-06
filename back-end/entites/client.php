<?php 
/**
 * 
*/
class client 
{
	private $cin;
	private $photo;
	private $nom;
	private $prenom;
	private $email;
	private $adresse;
    private $dateN;
    private $dureeC;
    private $numcarte;
    private $mois;
    private $annee;
    private $CVC;
	function __construct($cin,$nom,$prenom,$email,$adresse,$dateN,$dureeC,$numcarte,$mois,$annee,$CVC)
   { $this->cin=$cin;
   	$this->nom=$nom;
   	$this->prenom=$prenom;
   	$this->email=$email;
    $this->adresse=$adresse;
    $this->dateN=$dateN;
    $this->dureeC=$dureeC;
    $this->numcarte=$numcarte;
    $this->mois=$mois;
    $this->annee=$annee;
    $this->CVC=$CVC;

		}
	function GetCin(){
		return $this->cin;
	}
		function GetPhoto(){
		return $this->photo;
	}
		function GetNom(){
		return $this->nom;
	}

		function GetPrenom(){
		return $this->prenom;
	}

		function GetEmail(){
		return $this->email;
	}

		function GetAdresse(){
		return $this->adresse;
	}

		function GetDateN(){
		return $this->dateN;
    }
        function GetDureeC(){
		return $this->dureeC;
    }
        function GetNumcarte(){
		return $this->numcarte;
    }
        function GetMois(){
		return $this->mois;
    }
        function GetAnnee(){
		return $this->annee;
    }
        function GetCVC(){
		return $this->CVC;
	}

}
?>