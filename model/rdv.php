<?php

class Rdv
{
    var $id_rdv;
    var $id_patient;
    var $id_specialite;
    var $date;
    var $time;

    function __construct($id_rdv, $id_patient, $id_specialite, $date, $time)
    {
        $this->id_rdv = $id_rdv;
        $this->id_patient = $id_patient;
        $this->id_specialite = $id_specialite;
        $this->date = $date;
        $this->time = $time;
    }

    function add($cnx)
    {
        $sql = "insert into rdv(id_patient,id_specialite,date,time) values(' $this->id_patient','$this->id_specialite','$this->date','$this->time')";
        $cnx->query($sql);
    }

    function edit($cnx)
    {
        $sql = "update rdv set id_patient='$this->id_patient',id_specialite='$this->id_specialite',date='$this->date',time='$this->time' where id_rdv='$this->id_rdv'";
        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select r.*, p.name as patient, s.name as specialite from rdv r, patient p, specialite s where r.id_patient=p.id_patient and r.id_specialite = s.id_specialite";
        $req = $cnx->query($sql);
        $rdvs = array();
        while ($res = $req->fetch()) {
			$rdvs[$res['id_rdv']]['id_rdv'] = $res['id_rdv'];
            $rdvs[$res['id_rdv']]['id_patient'] = $res['id_patient'];
            $rdvs[$res['id_rdv']]['id_specialite'] = $res['id_specialite'];
            $rdvs[$res['id_rdv']]['date'] = $res['date'];
            $rdvs[$res['id_rdv']]['time'] = $res['time'];
			$rdvs[$res['id_rdv']]['patient'] = $res['patient'];
			$rdvs[$res['id_rdv']]['specialite'] = $res['specialite'];
        }
        return $rdvs;
    }

    function view($cnx)
    {
        $sql = "select * from rdv where id_rdv='$this->id_rdv'";
        $req = $cnx->query($sql);
        $rdv = $req->fetch();
        return $rdv;

    }

    function delete($cnx)
    {
        $sql = "delete from rdv where id_rdv='$this->id_rdv'";
        $cnx->query($sql);
    }

} // fin class

?>

