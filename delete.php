<?php
    // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");
	// ver comentário em index.php sobre mysqli_connect
	$con = @ mysqli_connect("localhost","root","","escola");
  	if ($con == null ) {
      // Se conexão null, houve erro
      die("Falha ao conectar");	
  	} else {
  	  // Comando SQL delete é executado no banco de dados. O vetor $_GET contém o parâmetro "id" da requisão gerada ao ser pressionado o link Excluir em index.php.
  	  mysqli_query($con,"delete from aluno where id=".$_GET['id']);
  	}
?>