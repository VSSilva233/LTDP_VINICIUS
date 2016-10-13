<?php
	include 'conexao.php';
	
	
	$id = $_GET['id']; // Recebendo o valor enviado pelo link
	
	$sql = mysql_query("DELETE FROM questao WHERE idquestao='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida
	
	
	if ($sql) {
		echo "Registro excluído com sucesso";
		echo "<a href='listar.php'> Clique aqui para voltar</a>";
	}
	
	mysql_close($conexao); 
?>
