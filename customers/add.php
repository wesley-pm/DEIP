<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>


<form action="add.php" method="post">
  <!-- area de campos do form -->
  
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome Completo</label>
      <input type="text" required class="form-control" name="customer['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Matrícula</label>
      <input type="text" required class="form-control" name="customer['ie']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Unidade</label>
      <input type="text" required class="form-control" name="customer['hood']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Município</label>
      <input type="text" required class="form-control" name="customer['city']">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" required class="form-control" name="customer['state']">
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" required class="form-control" name="customer['mobile']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Inclusão</label>
      <input type="text" required class="form-control" name="customer['date_inclu']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" required class="form-control" name="customer['birthdate']">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>