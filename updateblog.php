<?php

include_once 'E:/xampp/htdocs/weeebbb/blog1/model/blog.php';
include_once 'E:/xampp/htdocs/weeebbb/blog1/controller/blogc.php';


$blogc = new blogc();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["titre_blog"]) &&
        isset($_POST["description"])
       
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["titre_blog"]) && 
            !empty($_POST["description"])  
            
        ) {
            $ajout = new blog(
                $_POST['nom'],
                $_POST['titre_blog'], 
                $_POST['description']
               
                
			);
			
            $blogc->updateblog($ajout, $_GET['id']);
            header('refresh:5;url=showblog.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoutesm Display</title>
    <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets2/vendor/owl.carousel/assets2/owl.carousel.min.css" rel="stylesheet">
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

		<title>Modifier blog</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a class="btn btn-primary" href="showblog.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>

        <?php
			if (isset($_GET['id'])){
				$ajout = $blogc->recupererblog($_GET['id']);
				
		?>
		
		
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						
					</td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $ajout['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $ajout['nom']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="titre_blog">titre du blog:
                        </label>
                    </td>
                    <td><input type="text" name="titre_blog" id="titre_blog" maxlength="40" value = "<?php echo $ajout['titre_blog']; ?>"></td>
                </tr>
                <td>
						<label for="description">description:
						</label>
					</td>
					<td>
						<input type="text" name="description" id="description" maxlength="20" value = "<?php echo $ajout['description']; ?>">
					</td>
				</tr>
                
        
                    
                
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer" class="btn btn-primary" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler"  class="btn btn-primary" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>