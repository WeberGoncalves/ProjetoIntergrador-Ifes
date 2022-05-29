<?php

	session_start();

	//estamos trabalhando na montagem do texto
	$pagamento = str_replace('#', '-', $_POST['pagamento']);
	$cursos = str_replace('#', '-', $_POST['cursos']);
	$objetivo = str_replace('#', '-', $_POST['objetivo']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $pagamento . '#' . $cursos . '#' . $objetivo . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../../app_weber_desk/arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_compra.php');
?>