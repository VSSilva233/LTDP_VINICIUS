<?php

	var_dump($GET);
	var_dump($POST);
	echo $_POOST['nome'];
	
	$servidor = "localhost";
	$usuario = "root";
	$senha="";
	
	$nome_banco = "bd-centro_interesse";
	
	$banco = mysql_select_db($nome_banco, $conexao);
	
	$conn = mysql_connect($servidor,$usuario,$senha); mysql_select_db($banco) or die( "N�o foi poss�vel conectar ao banco MySQL");
	if (!$conn) {echo "N�o foi poss�vel conectar ao banco MySQL.
"; exit;}
	else {echo "Parab�ns!! A conex�o ao banco de dados ocorreu normalmente!.
";}
	mysql_close();
	?>
		
