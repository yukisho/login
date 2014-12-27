<?
require ('config.php');
require ('PasswordHash.php');
include 'authcheck.php';
?>

<style>
table, td {
    border: 0px;
    width: 250px;
    text-align: center;
}
</style>
<table align="center">
<form method="post" action="adduser.php">
<div align="center"><h2>Add User</h2></div>
<tr><td>Username:</td> <td><input type="text" name="username"></td></tr>
<tr><td>Password:</td> <td><input type="password" name="password"></td></tr>            
<tr><input type="text" name="session" value="authuser" hidden><td></td>
<td><input type="submit" name="Submit" value="Add User"></td></tr></form><br />
</table><br />

<?

if(isset($_POST['Submit']))
	{

	    $user = $_POST['username'];
	    $pswd = $_POST['password'];
	    $session = $_POST['session'];

	    $hash_obj = new PasswordHash(8, false);
	    error_reporting(E_ALL); ini_set('display_errors', 1);

	   if (strlen($password)>72){die("Password must be less than 73 characters.");
	    }

	   $hash = $hash_obj->HashPassword($pswd);

	   $link = new mysqli($servername, $username, $password, $database);
		// Check connection
		if ($link->connect_error) {
		    die("Connection failed: " . $link->connect_error);
		}

	    $stmt = $link->prepare("INSERT INTO $users (username, password, session) VALUES (?, ?, ?)");
		  mysqli_stmt_bind_param($stmt, 'sss', $user, $hash, $session);

		$stmt->execute();

		$link->close();
	}

?>