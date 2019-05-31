<!--
  ?? = https://www.tutorialspoint.com/php7/php7_coalescing_operator.htm
-->

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">ID</label>
      <input type="number" name="txtid" min="1" value="<?= $_GET['id'] ?? '' ?>" readonly class="form-control">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">NOME</label>
      <input type="text" name="txtnm" maxlength="100" pattern="[A-Za-z ]+" value="<?= $nm ?? '' ?>" class="form-control">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">ENDEREÇO</label>
    <input type="text" name="txted" maxlength="100" pattern="[A-Za-z ]+" value="<?= $ed ?? '' ?>" class="form-control">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">DATA NASCIMENTO</label>
    <input type="date" name="dtnasc" value="<?= $dtnasc ?? '' ?>" class="form-control">
  </div>
    <input class="btn btn-primary mr-2" type="submit" value="Enviar"/>
    <input class="btn btn-danger mr-2" type="reset" value="Limpar"/>
    <a href="index.php" class="btn btn-info">Voltar</a>
  </div>