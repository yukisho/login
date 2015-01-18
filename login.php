<?

error_reporting(E_ALL);
ini_set('display_errors',1);

if(!isset($_POST['Submit']))
        {
            include 'form.php';
        }
        elseif (isset($_POST['Submit'])){
ob_start();
session_start();
// Include database connection settings
require('config.php');
require("PasswordHash.php");

$hasher = new PasswordHash(8, false);

function getRandomCode(){
    $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()-=_+";
    $su = strlen($an) - 1;
    return substr($an, rand(0, $su), 1) .
    substr($an, rand(0, $su), 1) .
    substr($an, rand(0, $su), 1) .
    substr($an, rand(0, $su), 1) .
    substr($an, rand(0, $su), 1) .
    substr($an, rand(0, $su), 1);
    }

    for ($i = 0; $i < 1; $i++)
$sess = getRandomCode();

// Passwords should never be longer than 72 characters to prevent DoS attacks
if (strlen($password) > 72) { die("Password must be 72 characters or less"); }

$mysqli = new mysqli($servername, $username, $password, $database);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("SELECT password FROM $users WHERE username = ?");

$stmt->bind_param('s', $_POST['username']);

$stmt->execute();

$stmt->bind_result($res);

while ($stmt->fetch()) {
        printf ('Win!');
}

$hash = $res;
$pass = $_POST['password'];

if ($hasher->CheckPassword($pass, $hash)) { //$hash is the hash retrieved from the DB
	$_SESSION['authuser'] = $sess;
        session_write_close();
        header("Location: $redirect");
    } else {
        echo 'Failed: ';
        echo $_POST['username'];
    }

$mysqli->close();
ob_end_flush();
}

?>