<?php
$userFile = fopen("users.txt", "r") or die("Unable to open file!");
while(($lines = fgets($userFile)) !== false){
	$line = explode(";", $lines);
	if($line[0] == $_POST['username']){
		header('Location: indexRegister.php?error=esistente');
	}
}
fclose($userFile);

if($_POST['password'] == $_POST['passwordConfirm']){
$userFile = fopen("users.txt", "a") or die("Unable to open file!");
$username = $_POST['username'];
fwrite($userFile, $username . ";");
$pass = $_POST['password'];
fwrite($userFile, $pass . "\n");
fclose($userFile);
}
else {
	header('Location: indexRegister.php?error=credenziali');
}



?>