<?php
include("session.php");
class Process
{
   /* Class constructor */
	function __construct()
	{
		global $session;
		/* User submitted login form */
		if(isset($_POST['login'])){
			$this->procLogin();
		} elseif(isset($_POST['register'])) {
			$this->procRegister();
		} elseif(isset($_POST['addContact'])) {
			$this->procAddContact();
		} elseif(isset($_POST['addPost'])) {
			$this->procAddPost();
		}
		else {
			$this->procLogout();
		}
	}
	
	function procLogin()
	{
		global $session, $form;
		/* Login attempt */
		$retval = $session->login($_POST['username'], $_POST['password']);
		  
		/* Login successful */
		if($retval){
			header("Location: ../index.php");
		} else{  /* Login failed */
			header("Location: ../index.php");
		}
	}
	
	function procRegister()
	{
		global $database, $session;
		$retval = $session->register($_POST);
		if($retval) {
			header("Location: ../index.php");
		} else {
			header("Location: ../signup.php");
		}
	}
	
	function procLogout()
	{
		global $database, $session;
		$retval = $session->logout();
		header("Location: ../index.php");
	}
	
	function procAddContact()
	{
		global $database, $session;
		$games = implode(', ', $_POST['games']);
		$sql = "INSERT INTO contact SET name = ?, surname = ?, email = ?, gender = ?, games = ?, rating = ?";
		$stmt = $database->connection->prepare($sql);
		$stmt->execute(array($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['gender'], $games, $_POST['ratingOption']));
		$session->setMessage("Thank you for your feedback!");
		header("Location: ../contact.php");
	}
	function procAddPost(){
		global $database, $session;
		$sql = "INSERT INTO postimet SET titulli=?, nentitulli = ?, Pershkrimi = ?, Foto = ?";
		$stmt = $database->connection->prepare($sql);
		$stmt->execute(array($_POST['Titulli'], $_POST['NenTitulli'], $_POST['Pershkrimi'], $_POST['Foto']));
		$session->setMessage("Thank you for your feedback!");
		header("Location: ../writePost.php");

	}
}

/* Initialize process */
$process = new Process;
?>