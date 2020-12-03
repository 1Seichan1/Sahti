<?php
include_once "E:/xampp/htdocs/weeebbb/blog1/controller/blogc.php";
include_once "E:/xampp/htdocs/weeebbb/blog1/model/blog.php";

$ajout=new blogc();

if (isset($_POST["id"])){
    $ajout->deleteblog($_POST["id"]);
    header('Location:showblog.php');
}


?>