<?php


class Users 
{
private $id;
private  $UserName;
private  $Email;
private $Password;
private $Create_DateTime;
private $UserType;
private $Phone;



function __construct( $id,$UserName,$Email,$Password,$Create_DateTime,$UserType,$Phone)
{

$this->id =$id;
$this->UserName=$UserName;
$this->Email=$Email;
$this->Password=$Password;
$this->Create_DateTime=$Create_DateTime;
$this->UserType=$UserType;
$this->Phone=$Phone;

}


function getid()
{return $this->id;}
function getUserName()
{return $this->UserName;}
function getEmail()
{return $this->Email;}
function getPassword()
{return $this->Password;}
function getCreate_DateTime()
{return $this->Create_DateTime;}
function getUserType()
{return $this->UserType;}
function getPhone()
{return $this->Phone;}
 

function setid($id)
{ $this->id=$id;}
function setUserName($UserName)
{ $this->UserName=$UserName;}
function setEmail($Email)
{$this->Email=$Email;}
function setPassword($Password)
{$this->Password=$Password;}

function setCreate_DateTime($Create_DateTime)
{$this->Create_DateTime=$Create_DateTime;}

function setUserType($UserType)
{$this->UserType=$UserType;}

function setPhone($Phone)
{$this->Phone=$Phone;}

}

?>

 