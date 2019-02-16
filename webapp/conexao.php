<?php
	$conectar = mysqli_connect('localhost','root', 'root');
	$banco = mysqli_select_db($conectar, "tech");
	
	header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	
	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'tech'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
	
?>
