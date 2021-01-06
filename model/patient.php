<?php

class Patient
{
    var $id_patient;
	var $name;
    var $cin;
    var $email;
    var $region;
    var $tel;
	var $type_sang;

    function __construct($id_patient,$name, $cin, $email, $region, $tel,$type_sang)
    {
        $this->id_patient = $id_patient;
		$this->name = $name;
        $this->cin = $cin;
        $this->email = $email;
        $this->region = $region;
        $this->tel = $tel;
		$this->type_sang = $type_sang;
    }

    function add($cnx)
    {
        $sql = "insert into patient(cin,name,email,region,tel,type_sang) values('$this->cin','$this->name','$this->email','$this->region','$this->tel','$this->type_sang')";
        $cnx->query($sql);
    }

    function edit($cnx)
    {
        $sql = "update patient set cin='$this->cin',name='$this->name',email='$this->email',region='$this->region',tel='$this->tel',type_sang='$this->type_sang' where id_patient='$this->id_patient'";
        $cnx->query($sql);
    }

    function index($cnx)
    {
        $sql = "select * from patient";
        $req = $cnx->query($sql);
        $patients = array();
        while ($res = $req->fetch()) {
			$patients[$res['id_patient']]['id_patient'] = $res['id_patient'];
            $patients[$res['id_patient']]['cin'] = $res['cin'];
            $patients[$res['id_patient']]['email'] = $res['email'];
            $patients[$res['id_patient']]['region'] = $res['region'];
            $patients[$res['id_patient']]['tel'] = $res['tel'];
			$patients[$res['id_patient']]['type_sang'] = $res['type_sang'];
			$patients[$res['id_patient']]['name'] = $res['name'];
        }
        return $patients;
    }

    function view($cnx)
    {
        $sql = "select * from patient where id_patient='$this->id_patient'";
        $req = $cnx->query($sql);
        $patient = $req->fetch();
        return $patient;

    }

    function delete($cnx)
    {
        $sql = "delete from patient where id_patient='$this->id_patient'";
        $cnx->query($sql);
    }

} // fin class

?>

