<?php


	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd-quiz";

	$conexao = mysql_connect($servidor, $usuario, $senha);

	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "N�o foi poss�vel connectar ";
		exit;
	}else{/*senao*/
		/*Selecione o banco de dados ou morra*/
		
		$banco = mysql_select_db($nome_banco, $conexao) or die ("N�o foi poss�vel conectar ao banco de dados");
		
	}
?>