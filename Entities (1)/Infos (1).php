<?php


class Infos 
{
private $id;
private  $Taille;
private  $Poid;
private $TypeSang;
private $Region;
private $Role;




function __construct( $id,$Taille,$Poid,$TypeSang,$Region,$Role)
{

$this->id =$id;
$this->Taille=$Taille;
$this->Poid=$Poid;
$this->TypeSang=$TypeSang;
$this->Region=$Region;
$this->Role=$Role;


}


function getid()
{return $this->id;}
function getTaille()
{return $this->Taille;}
function getPoid()
{return $this->Poid;}
function getTypeSang()
{return $this->TypeSang;}
function getRegion()
{return $this->Region;}
function getRole()
{return $this->Role;}

 

function setid($id)
{ $this->id=$id;}
function setTaille($Taille)
{ $this->Taille=$Taille;}
function setPoid($Poid)
{$this->Poid=$Poid;}
function setTypeSang($TypeSang)
{$this->TypeSang=$TypeSang;}

function setRegion($Region)
{$this->Region=$Region;}

function setRole($Role)
{$this->Role=$Role;}


}

?>

 