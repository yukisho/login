<?
require 'config.php';
?>
<title><? echo $title; ?></title> <!-- Edit this in config.php -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='login.css' rel='stylesheet' type='text/css'>
<body>
<div style="position: relative; top: 300px; left: 800px; width: 300px;">
<div style="text-align: center; width: 300px; display: table; margin: 0 auto; background: #30a5ff; border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 20px;">
<form action='login.php' method='POST'>
<h2><? echo $message; ?></h2> <!-- Edit this in config.php -->
</div>
<div style="text-align: center; width: 300px; display: table; margin: 0 auto; background: #3C3C3C; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; padding: 20px;">
<input type='text' name='username' id='username' size='30' placeholder='username'><br />
<br />
<input type='password' name='password' id='password' size='30' placeholder='password'><br />
<br />
<input type="submit" name="Submit" value="Log In" style="font-size: 20px !important; background-color: #30a5ff; border:1px solid #30a5ff; border-radius: 3px; color: #FFFFFF; width: 100px;">
</form><br />
<br />
<? echo $note; ?> <!-- Edit this in config.php -->
</div>
</div>
</body>