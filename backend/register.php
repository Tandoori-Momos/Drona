<?php
	
	require 'conf.php';
	require 'mysqli.php';

	$o = new Conf();
	$f = new MysqliDb($o->host,$o->username,$o->pass,$o->db);

	$error = 0;


	
	$f->where("email",$_POST['email']);
	$f->get("users2");

	if ($f->count) {
		$error  = 1;	
	} 

	if ($error) {
		echo "Email already in use!";
	} else {
		$reg = array(
			"fname" => $_POST['fname'],
			"lname" => $_POST['lname'],
			"email" => $_POST['email'],
			"pass" => md5($_POST['password']),
            "account_type" => $_POST['acc'],
            "city" => $_POST['city'],
            "state" => $_POST['state'],
            "country" => $_POST['country'],
            "blood" => $_POST['blood'],
            "age" => $_POST['age'],
            "gender" => $_POST['gender']

			);

		$f->insert('users2',$reg);
		header('index.html');

		echo "success";
	}
	

?>