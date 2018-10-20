<?php
header('Content-Type: text/html; charset=utf-8');
include "index.html";
$login = $_POST['login'];
$pass = $_POST['password'];
$submit=$_POST['submit']; 
	if(isset($submit)){ 
		if ($login == "vvyyl" && $pass == "ctf_izi"){

			echo '<meta http-equiv="refresh" content="0; url=/glvHsasGcnexSqgtb/H3lL0.php">';
		} 

		else{
			echo "<p align=center><font align=center color=red size = 17>Error</font></p>";
		}
	}
?>