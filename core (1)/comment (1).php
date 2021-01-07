<?PHP
	session_start();
    include "E:/xampp/htdocs/weeebbb/sahti/core/blogc.php";
    include_once 'E:/xampp/htdocs/weeebbb/sahti/Entities/com.php';
    
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="blog1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
  


if(isset($_POST["envoyer"]))
{

if(isset($_POST["com"]))
{
 


    $com= new com($_POST["com"]);

    $A= new blogc3();
    $A->addcom($com);

   

    header("location: comment.php");

  }
  
}




  
  ?>
<html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>commentaire </title>
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

  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>commentaire</h2>
          <ol>
          <li><a href="index.html">Home</a></li>
            <li><a href="blog.php">blog</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="com" class="com">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" data-aos="fade-up">

                
              
                <div class="col-lg-8 entries">

<div class="sidebar" data-aos="fade-left">

<form action="" method="POST"  class="needs-validation" novalidate>


<tr>




<td>
<div class="form-group">
<label for="com">ajouter un commentaire:</label>
<input type="text" class="form-control" id="com" name="com"  required>

<div class="valid-feedback">

Looks good!
</div>
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
<br>

<div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              

              
              <h3 class="sidebar-title">commentaire</h3>
              <div class="sidebar-item commentaire">
                <br>
                <ul>
                <td>
                  <table>
                <?php 
			$sql="SELECT * FROM comm";
			$result = mysqli_query($conn,$sql);
      
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>"
				.$row["com"]."</td><tr>"
				."<td><a href='updatecom.php?id=".$row["id"]."'>modifier<a></td>"
				."<td><a href='deletecom.php?id=".$row["id"]."'>supprimer<a></td>";
			}

     ?>
     </table>
                  

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>







<script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
  
  


  




  </div><!-- End sidebar categories-->


  

  



              

              

            </article><!-- End blog entry -->

            

            

          

          
              
              

              

           

          

      

      
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/jquery/jquery.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/venobox/venobox.min.js"></script>
  <script src="assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>