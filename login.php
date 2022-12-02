<?php

$userFile = fopen("users.txt", "r") or die("Unable to open file!");
while(($lines = fgets($userFile)) !== false){
	$line = explode(";", $lines);
	echo $line[0] . $line[1];
	if($line[0] == $_POST['username']){
		if($line[1] == $_POST['password']){
		header('Location: dashboard.php');
		}else{
			header('Location: indexLogin.php?error=credenziali');
		}
	}
}
fclose($userFile)
?>