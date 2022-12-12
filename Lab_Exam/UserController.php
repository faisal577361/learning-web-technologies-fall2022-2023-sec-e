<?php
	require_once 'db_config.php';
    $id="";
	$err_id="";
    $username = "";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
    $conpass="";
    $err_conpass="";
	
	$utype="";
	$err_utype="";
	$err_db = "";
	$hasError=false;
	
	$utype = array("User","Admin");

	if(isset($_POST["sign_up"])){
		if(empty($_POST["username"])){
			$err_username="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=2){
			$err_username="Name Must be greater than ";
			$hasError = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
        if(empty($_POST["id"])){
			$err_phone="Id Required";
			$hasError = true;
		}
		
		else{
			$id=$_POST["id"];
		}
       

		if(!isset($_POST["utype"])){
			$err_bloodgroup = "User type Required";
			$hasError = true;
		}
		else{
			$bloodgroup = $_POST["utype"];
		}

        if(empty($_POST["password"] || $_POST["conpass"])){

            $err_password="password Required";
            $err_password="confirm password Required";

            $hasError=true;

        }
        elseif($_POST["password"] === $_POST["conpass"]){
            $password=$_POST["password"];
            $conpass=$_POST["conpass"];

        }
        else{
            $err_conpass="Password did not match";
            $err_password="Password did not match";
			$hasError = true;
            
        }
		if(!$hasError){
			$rs = insertUser($id,$uname,$email,$pass,$conpass,$utype);
			//var_dump($rs);
			if($rs === true){
				header("Location: signin.php");
			}
			$err_db = $rs;
			
		}
	}


	
	function insertUser($id,$uname,$email,$pass,$conpass,$utype){
		$query  = "insert into users values ('',$id,'$uname','$email','$pass','$conpass','$utype')";
		return execute($query);	
	}
	
	
?>