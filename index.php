<?php include_once "includes/header.php"; ?>
<div class="container">
<div class="row mt-3">
  <div class="col-md-8 mx-auto rounded shadow p-3">
  <table class="table table-bordered">
    <thead class="thead-dark">
      <th>
        ID
      </th>
      <th>
        NOME
      </th>
      <th>
        ENDEREÇO
      </th>
      <th>
        DATA DE NASCIMENTO
      </th>
      <th>
        AÇÕES
      </th>
    </thead>
    <tbody>
      <?php
        //Para executar este aplicativo, criar no Mysql banco de dados "escola" e a tabela "aluno" por meio do comando: create table aluno (id int not null primary key, nome varchar(100) not null, endereco varchar(100) not null)
        // mysqli_connect abre conexão com Mysql. Há quatro parâmetros: servidor, usuário, senha, banco
      $con = @ mysqli_connect("localhost","root","","escola");
      if ($con == null ) {
          // Se conexão null, houve erro
          die("Falha ao conectar"); 
      } else {
        echo "<a href='create.php' class='btn btn-primary mb-3'>Criar</a>";
        // mysqli_query envia para o Mysql o texto de um comando SQL. No caso de Select, retorna a tabela resultante.
        $tab = mysqli_query($con,"select id, nome, endereco, data_nasc from aluno");
        // Cada iteração do loop abaixo obtém uma linha da tabela resultante do Select e envia seus dados ao navegador. $lin é uma vetor com índices correspondendo ao nome das colunas (id, nome, endereco) e contéudo com seus respectivos dados.
        while ($lin = mysqli_fetch_assoc($tab)) {
          echo '<tr>
                  <td>
                    '.$lin['id'].'
                  </td>
                  <td>
                    '.$lin['nome'].
                  '</td>
                   <td>'.
                    $lin['endereco'].
                  '</td>
                   <td>'.
                    date('d/m/Y',strtotime($lin['data_nasc'])).
                  '</td>
                   <td class="text-center">
                    <a href="edit.php?id='.$lin['id'].'"><i class="fas fa-edit text-warning mr-2"></i></a> <a href=delete.php?id="'.$lin['id'].'"><i class="fas fa-trash-alt text-danger"></i></a><br/>  
                  </td>';
        }
      }
  ?>  
    </tbody>
  </table>
</div>
</div>
</div>
<?php include_once "includes/footer.php"; ?>