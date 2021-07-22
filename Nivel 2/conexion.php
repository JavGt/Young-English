<?php
	$Verbo = $_post["Verbo"];
	$irregulares = $_post["irregulares"];
	$oracion = $_post["orecion"];

	mysql_select_db("nivel2",$con);
	mysql_query("SET NAME ´utf8´");
?>	
