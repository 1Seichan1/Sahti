<?php 
session_start();
if(isset($_SESSION['username'])) {


  header("Location: ./index.php");
  exit;
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="assets/js/javascript.js">
    </script>
</head>
<body>
<div class="cont_principal">

  <div class="cont_centrar">
  <div class="cont_login">
    <form action="../../core/AjouterUsers.php" method="POST">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">
      <input type="email" class="input_form_sign " placeholder="Email" name="Email" />
    
    <input type="text" class="input_form_sign d_block active_inp" placeholder="UserName" name="UserName" />

    <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="Password" />  
   <input type="number" class="input_form_sign" placeholder="Phone Number" name="Phone" />
    <input type="hidden" value="patient" name="UserType">
    <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
<div class="terms_and_cons d_none">
    <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
  
    </div>
      </div>
<div class="cont_btn">
     <button class="btn_sign">SIGN IN</button>
      
      </div>
      
    </form>
    </div>
    
  </div>
  

</div>
</body>
</html>