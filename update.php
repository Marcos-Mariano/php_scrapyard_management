<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");
	// ver comentário em index.php sobre mysqli_connect
	$con = @ mysqli_connect("localhost","root","","escola");
  if ($con == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");	
  } else {
    // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
    $ps = mysqli_prepare($con,"UPDATE ALUNO SET nome=?, endereco=?, data_nasc=? where id=?");
    mysqli_stmt_bind_param($ps,"sssi",$_POST['txtnm'],$_POST['txted'],$_POST['dtnasc'],$_POST['txtid']);
    mysqli_stmt_execute($ps);
  }
?>