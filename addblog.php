<?php
    include_once 'E:/xampp/htdocs/weeebbb/blog1/model/blog.php';
    include_once 'E:/xampp/htdocs/weeebbb/blog1/controller/blogc.php';

    session_start();


if(isset($_POST["envoyer"]))
{

if(isset($_POST["nom"])&& isset($_POST["titre_blog"]) && isset($_POST["description"]) )
{
 


    $ajout= new blog($_POST["nom"], $_POST["titre_blog"], $_POST["description"]);

    $A= new blogc();
    $A->addblog($ajout);

    echo '<script>alert("tzed");</script>';

    header("location: showblog.php");

  }

}
?>

<!DOCTYPE html>
<html lang="en">
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

</head>
    <body>
        <button> <a class="btn btn-primary"  href="showblog.php">Retour à la liste </a> </button> 
        <hr>
        
        <div id="error">
            
        </div>
        
        <form action="" method="POST">
        

                <tr>
                    
                    <td>
                    <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="exemple: mohamed kalech" required >
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="form-group">
                <label for="titre_blog">titre_blog:</label>
                <input type="text" class="form-control" id="titre_blog" name="titre_blog" placeholder="exemple:Fatigue visuelle pour les adultes" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
                
                <div class="form-group ">
                  <label for="description">description:</label>
                  <input type="text" class="form-control " id="description" name="description" placeholder="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <br>
              <br>


              <div class="Neon Neon-theme-dragdropbox">
                <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
                <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
                </div>


                <tr>
                    
                    
                        
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="envoyer" value="Envoyer" class="btn btn-primary">   
                    </td>
                    <td>
                        <input type="reset" value="Annuler" class="btn btn-primary">
                    </td>
                </tr>

                
            
        </form>
    </body>
</html>