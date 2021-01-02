<?PHP
	session_start();
    include "E:/xampp/htdocs/weeebbb/blog1/controller/blogc.php";
    include_once 'E:/xampp/htdocs/weeebbb/blog1/model/blog.php';


    $servername="localhost";
	$username="root";
	$password="";
	$dbname="blog1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);


    $ajout=new blogc();
    $listeUsers=$ajout->showblog();
    
    $categorie=new blogc2();
    $cat="SELECT * FROM categorie";
    $listcat=mysqli_query($conn,$cat);
    

    


    

    
    
    
    





if(isset($_POST["envoyer"]))
{

if(isset($_POST["nom"])&& isset($_POST["titre_blog"]) && isset($_POST["description"])&& isset($_POST["image"])&& isset($_POST["categorie"]) )
{
 


    $ajout= new blog($_POST["nom"], $_POST["titre_blog"], $_POST["description"], $_POST["image"], $_POST["categorie"]);

    $A= new blogc();
    $A->addblog($ajout);

   

    header("location: blog.php");

  }
  
}




    $db = mysqli_connect("localhost", "root", "", "blog1");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  
  	

  	// image file directory
  	$target = "ajout/".basename($image);

  	$sql = "INSERT INTO ajout (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM ajout");





  //searchhhhhhhhhhhhhhhhhhhhhhhhh
  

  if(isset($_POST['search']))
  {
      $valueToSearch = $_POST['valueToSearch'];
      // search in all table columns
      // using concat mysql function
      $query = "SELECT * FROM `ajout` WHERE CONCAT(`categorie`) LIKE '%".$valueToSearch."%'";
      $search_result = filterTable($query);
      
  }
   else {
      $query = "SELECT * FROM `ajout`";
      $search_result = filterTable($query);
  }
  
  // function to connect and execute the query
  function filterTable($query)
  {
      $connect = mysqli_connect("localhost", "root", "", "blog1");
      $filter_Result = mysqli_query($connect, $query);
      return $filter_Result;
  }
  
  
  

  ?>

  
<html>
<html lang="en">

<head>

<style type="text/css">
   
   
   
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 650px;
   	height: 400px;
   }
</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog </title>
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
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.php">blog</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" data-aos="fade-up">

            <?PHP 
              foreach($listeUsers as $ajout){ 
                ?>
                

                <!-- ======= partie taswira ======= -->
               


<div id="image" >
<?php
 while ($row = mysqli_fetch_array($result)) {
  echo "<div id='img_div'>";
  
 echo "<img src='tsawer/".$row['image']."' >";
 
 echo "<p>".$row['titre_blog']."</p>";
 echo "<a>".$row['description']."</a>";

   
 ?>
<tr>
  <br> 
  <br>           
                <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i><?PHP echo "<a>".$row['nom']."</a>" ?></li>
                <li class="d-flex align-items-center"><i class="icofont-user"></i><?PHP echo "<a>".$row['categorie']."</a>" ?></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a  href="comment.php?id=<?PHP echo $ajout['id']; ?>"> comments </a></li>        
                <td>
                </ul>
              </div>
              <br>
                 <!-- ======= boutton delete ======= -->
                 
                <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"> <li class="d-flex align-items-center"></i> <form method="POST" action="deleteblog.php">
                    <input type="submit" name="supprimer" value="supprimer" class="btn btn-primary" >
                    <input type="hidden" value=<?PHP echo $ajout['id']; ?> name="id">
                    </form></li>
                </td>
                <td>
                  <!-- ======= boutton update ======= -->
                  <li class="d-flex align-items-center"> <li class="d-flex align-items-center"></i> <form method="POST" action="updateblog.php">
                    <input type="submit" name="modifier" value="modifier" class="btn btn-primary" >
                    <input type="hidden" value=<?PHP echo $ajout['id']; ?> name="id">
                    </form></li>



                </td>
                </ul>
              </div>



                <div class="entry-content">
               
               <div class="read-more">
               <a  href="more.php?id=<?PHP echo $ajout['id']; ?>"> lire la suite </a>
               </div>
             </div>  
             <br>


            </tr>
            <?php         
  echo "</div>";
  
 }
 ?>
 

<br>
<br>
<br>

</div>  
 
                   
          
                
              <?PHP
                 } 
                ?>
                <div class="col-lg-8 entries">

<div class="sidebar" data-aos="fade-left">

<form action="" method="POST" name="formu" class="needs-validation" novalidate>


<tr>

<td>
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="nom" name="nom" placeholder="exemple: mohamed kalech" required>
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


<label>categories</label>
		<select name="categorie">
			<?php while ($row = mysqli_fetch_array($listcat)):?>
				<option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
			<?php endwhile; ?>
		</select>
      
  



<div>
<label for="profile_pic"></label>
<input type="file" id="image" name="image"
accept=".jpg, .jpeg, .png" required>
</div>

<br>
<br>
<br>

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
  
  





  </div>
  

  </div><!-- End sidebar recent posts-->



              

              

            </article><!-- End blog entry -->

            

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="search.php" method="post">
                  <input type="text" name="valueToSearch" placeholder="Value To Search" >
                  <button type="submit" name="search" value="Filter" ><i class="icofont-search"></i></button>
                  

                  
                  

                

          

            

      
            
        </form>
        
    

            

              </div><!-- End sidebar categories-->

              
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                <td>
                  <table>
                <?php 
			$sql="SELECT * FROM categorie";
			$result = mysqli_query($conn,$sql);
      
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>"
				.$row["cat"]."</td><tr>";
				
			}

     ?>
     </table>

     <br>
     <br>
                  <li class="d-flex align-items-center"> <a href="categorie.php">parametre categorie</a></li> </td>
                </ul>

              </div><!-- End sidebar categories-->

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
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