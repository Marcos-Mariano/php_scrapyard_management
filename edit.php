<?php include_once "includes/header.php"; ?>

   <?php
     // Ver comentário sobre mysqli_prepare, mysqli_stmt_bind_param e mysqli_stmt_execute em store.php
     $con = @ mysqli_connect("localhost","root","","escola");
     $ps = mysqli_prepare($con,"select nome,endereco, data_nasc from aluno where id=?");
     mysqli_stmt_bind_param($ps,"i",$_GET['id']);
     mysqli_stmt_execute($ps);
     // mysqli_stmt_bind_result associa variáveis às colunas selecionadas no select (nome e endereço, no caso)
     mysqli_stmt_bind_result($ps,$nm,$ed,$dtnasc);
     // O comando fetch recupera a únida linha resultante do select (no caso foi realizado where pela chave primária) e carrega as respectivas variáveis associadas pelo comando mysqli_stmt_bind_result
     mysqli_stmt_fetch($ps)
      //print_r($aluno);
     
     // No HTML abaixo, <?= $variavel ? > é uma forma resumida para obter o valor da variável.
   ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto my-3 p-3 shadow rounded">
      <form action="update.php" method="post">
        <?php include_once "includes/formAluno.php"; ?>      
      </form>
    </div>
</div>
</div>
<?php include_once "includes/footer.php"; ?>
