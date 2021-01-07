<?php
include_once "E:/xampp/htdocs/weeebbb/sahti/core/blogc.php";
include_once "E:/xampp/htdocs/weeebbb/sahti/Entities/blog.php";

$ajout=new blogc();

if (isset($_POST["id"])){
    $ajout->deleteblog($_POST["id"]);
    header('Location:blog.php');
}


?>