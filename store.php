<?php
  // O header abaixo causará o redirecionamento do navegador para index.php. Não se pode enviar qualquer conteúdo antes de um header.
	header("location:index.php");
	// ver comentário em index.php sobre mysqli_connect
	$con = @ mysqli_connect("localhost","root","","escola");
  if ($con == null ) {
    // Se conexão null, houve erro
    die("Falha ao conectar");	
  } else {
    // Utilizar comandos preparados é uma forma mais segura de se trabalhar com banco de dados. mysqli_prepare envia para o banco de dados o comando a ser processado, mas sem os dados (representados por parâmetros - "?"). O banco de dados compila e prepara o comando para execução.  
    $ps = mysqli_prepare($con,"INSERT ALUNO VALUES (?,?,?,?)");
    // mysqli_stmt_bind_param associa variáveis (no caso posições do vetor $_POST) aos parâmetros ("?") do comando preparado. O segundo parâmetro ("iss") indica os tipos dos parâmetros, no caso: inteito, string e string.
    mysqli_stmt_bind_param($ps,"isss",$_POST['txtid'],$_POST['txtnm'],$_POST['txted'],$_POST['dtnasc']);
    // mysqli_stmt_execute envia ao banco de dados os valores das variáveis associadas aos parâmetros. O banco de dados executa o comando.
    mysqli_stmt_execute($ps);
  }
?>