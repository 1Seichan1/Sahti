<?php

class Specialite
{
    var $id_specialite;
    var $name;

    function __construct($id_specialite, $name)
    {
        $this->id_specialite = $id_specialite;
        $this->name = $name;
    }

    function add($cnx)
    {
        $sql = "insert into specialite(name) values(' $this->name')";
        $cnx->query($sql);
    }

    function edit($cnx)
    {
        $sql = "update specialite set name='$this->name' where id_specialite='$this->id_specialite'";
        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select * from specialite";
        $req = $cnx->query($sql);
        $specialites = array();
        while ($res = $req->fetch()) {
            $specialites[$res['id_specialite']]['name'] = $res['name'];
            $specialites[$res['id_specialite']]['id_specialite'] = $res['id_specialite'];
        }
        return $specialites;
    }

    function view($cnx)
    {
        $sql = "select * from specialite where id_specialite='$this->id_specialite'";
        $req = $cnx->query($sql);
        $specialite = $req->fetch();
        return $specialite;

    }

    function delete($cnx)
    {
        $sql = "delete from specialite where id_specialite='$this->id_specialite'";
        $cnx->query($sql);
    }

} // fin class

?>

