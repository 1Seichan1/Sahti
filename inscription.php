<?php
require('connection.inc.php');
require('functions.inc.php');
	$nom='';
	$prenom='';
	$email='';
	$cin='';
	$adresse='';
	$dateN='';
	$dureeC='';
	$msg='';
if(isset($_POST['submit'])){
	$nom=get_safe_value($con,$_POST['nom']);
	$prenom=get_safe_value($con,$_POST['prenom']);
	$email=get_safe_value($con,$_POST['email']);
	$cin=get_safe_value($con,$_POST['cin']);
	$adresse=get_safe_value($con,$_POST['adresse']);
	$dateN=get_safe_value($con,$_POST['dateN']);
	$dureeC=get_safe_value($con,$_POST['dureeC']);
	$resc=mysqli_query($con,"select * from client where cin='$cin'");
	$check=mysqli_num_rows($resc);
	if($check>0){
		$msg="Client already exist";
	}else{
		$msg='';
	}
	if($msg==''){
		mysqli_query($con,"INSERT INTO `client`(`cin`, `nom`, `prenom`, `email`, `adresse`, `dateN`, `dureeC`, `numcarte`, `mois`, `annee`, `cvc`) VALUES ('$cin','$nom','$prenom','$email','$adresse','$dateN','$dureeC',0,0,0,0)");
		header('location:carte.php?cin='.$cin.'');
		die();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form" method="post" enctype="multipart/form-data">
					<span class="contact100-form-title">
						remplir le formulaire
					</span>

					<?php if($msg!=''){ ?>
                                        <div class="alert alert-danger icons-alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <p><strong>Erreur!</strong> <?php echo $msg ?></p>
                                       </div>
                                       <?php } ?>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="nom" placeholder="nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Preame is required">
						<input class="input100" type="text" name="prenom" placeholder="prenom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "cin">
						<input class="input100" type="text" name="cin" placeholder="cin">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "adresse">
						<input class="input100" type="text" name="adresse" placeholder="adresse">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "date">
						<input class="input100" type="date" name="dateN" placeholder="date de naissance">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "durre">
						<input class="input100" type="text" name="dureeC" placeholder="duree du contrat">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>

						</span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="submit" type="submit">
							envoyer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
