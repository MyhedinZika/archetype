<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
date_default_timezone_set('UTC');
include("dbconnect.php");


class Session
{
	public $username;     //Username given on sign-up
	public $time;         //Time user was last active (page loaded)
	public $logged_in;    //True if user is logged in, false otherwise
	public $userinfo = array();  //The array holding all user info
	public $message;

	/* Class constructor */
	function __construct()
	{
		$this->time = time();
		$this->startSession();
	}
	
	function startSession()
	{
		global $database;  //The database connection
		session_start();   //Tell PHP to start the session
		
		/* Determine if user is logged in */
		$this->logged_in = $this->checkLogin();

	}

	function checkLogin()
	{
		global $database;  //The database connection
		/* Check if user has been remembered */

		/* Username and userid have been set and not guest */
		if(isset($_SESSION['username'])){

			/* User is logged in, set class variables */
			$this->userinfo  = $this->getUserInfo($_SESSION['username']);
			$this->username  = $this->userinfo['username'];
			return true;
		}
		/* User not logged in */
		else{
			return false;
		}
	}

	function login($subuser, $subpass)
	{
		global $database;
		$result = $this->confirmUserPass($subuser, $subpass);
		if($result) { // They entered correct details
			$this->userinfo  = $this->getUserInfo($subuser);
			$this->username  = $_SESSION['username'] = $this->userinfo['username'];
			setcookie("this_login", time(), time()+60*60*24*7300, '/');
			return true;
		} else {
			return false;
		}
	}
	
	function logout()
	{
		global $database;  //The database connection
		setcookie("last_login", $_COOKIE['this_login'], time()+60*60*24*7300, '/');
		/* Unset PHP session variables */
		unset($_SESSION['username']);
		/* Reflect fact that user has logged out */
		$this->logged_in = false;

		/* Destroy session */
		session_destroy();
	}
	
	function register($data)
	{
		global $database;
		if(!get_magic_quotes_gpc()){
			$firstname = addslashes($data['name']);
			$lastname = addslashes($data['surname']);
			$username = addslashes($data['username']);
			$password = addslashes($data['password']);  
	  	}
		else {
			$firstname=$data['name'];
			$lastname=$data['surname'];
			$username=$data['username'];
			$password=$data['password'];
		}
	  	$password = sha1($password);
	  	$sql = "SELECT * FROM users WHERE username = ? ";
	  	$stmt = $database->connection->prepare($sql);
		$stmt->execute(array($username));
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
 		if(isset($result['username'])) {	
   			echo "<script type='text/javascript'> window.alert('Username already exists!'); </script>";
    		return 0;
   		} else{
			$sql = "INSERT INTO users SET name = ?, surname = ?, username = ?, password = ?";
	        $stmt = $database->connection->prepare($sql);
			$stmt->execute(array($firstname, $lastname, $username, $password));
			return 1;
   		}		
	}
	
	function confirmUserPass($username, $password){
		global $database;
		if(!get_magic_quotes_gpc()) {
			$username = addslashes($username);
		}
		$query = "SELECT password FROM users WHERE username = ?";
		$stmt = $database->connection->prepare($query);
		$stmt->execute(array($username));
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$password = stripslashes($password);
		$sqlpass = sha1($password);
		
		if($sqlpass == $result['password']) {
			return true;
		} else {
			return false;
		}
	}
	
	function getUserInfo($username){
		global $database;
		$sql = "SELECT * FROM users WHERE username = ?";
		$stmt = $database->connection->prepare($sql);
		$stmt->execute(array($username));
		$dbarray = $stmt->fetch(PDO::FETCH_ASSOC);  
		/* Error occurred, return given name by default */
		$result = count($dbarray);
		if(!$dbarray || $result < 1){
			return NULL;
		}
		/* Return result array */
		return $dbarray;
	}
	function getUserPosts(){
		global $database;
		$sql = "SELECT * from Postimet";
		$stmt = $database->connection->prepare($sql);
		$stmt->execute();
		$posts = $stmt->fetchall(PDO::FETCH_ASSOC);
		
		return $posts;
	}
	function getServices(){
		global $database;
		$sql = "SELECT * from Services";
		$stmt = $database->connection->prepare($sql);
		$stmt->execute();
		$posts = $stmt->fetchall(PDO::FETCH_ASSOC);
		
		return $posts;
	}

	function setMessage($message)
	{
		$_SESSION['message'] = $message;
	}
	
	function getMessage()
	{
		if(isset($_SESSION['message'])) {
			$message = $_SESSION['message'];
			unset($_SESSION['message']);
			return $message;
		} else {
			return false;
		}
	}
}

$session = new Session();
?>