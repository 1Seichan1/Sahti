<?PHP
	
    include "E:/xampp/htdocs/weeebbb/blog1/controller/blogc.php";
    $ajout=new blogc();
    $listeUsers=$ajout->showblog();


?>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Afficher Liste des blogs </title>
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
		
    </head>
    <body>
		<button><a class="btn btn-primary" href="addblog.php">Ajouter un blog</a></button>
		<hr>
		<table border=2 align = 'center'>
			<tr>
                <th>id</th>
				<th>Nom</th>
				<th>titre du blog</th>
				<th>description</th>
                </tr>
                   
                <?PHP
       
               
       foreach($listeUsers as $ajout){
        ?>
            <tr>
                <td><?PHP echo $ajout['id']; ?></td>
                <td><?PHP echo $ajout['nom']; ?></td>
                <td><?PHP echo $ajout['titre_blog']; ?></td>
                <td><?PHP echo $ajout['description']; ?></td>
                <td>
                    <form method="POST" action="deleteblog.php">
                    <input type="submit" name="supprimer" value="supprimer" class="btn btn-primary" >
                    <input type="hidden" value=<?PHP echo $ajout['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a  href="updateblog.php?id=<?PHP echo $ajout['id']; ?>"> Modifier </a>
                </td>
            </tr>
        <?PHP
       } 
        ?>
        </table>
	</body>
</html>

            
            
