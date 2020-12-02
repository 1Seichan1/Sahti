<?PHP
	include "controller/UtilisateurC.php";
	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();
	foreach($listeUsers as $user){
					echo $user['id']; ?><td>&nbsp</td><?PHP
					echo $user['nom']; ?><td>&nbsp</td><?PHP
					echo $user['prenom']; ?><td>&nbsp</td><?PHP
					echo $user['email']; ?><td>&nbsp</td><?PHP
					echo $user['login'];?><td>&nbsp</td><?PHP
					?><br><?PHP
				}

	
			?>