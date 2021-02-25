<?php 
require_once('functions.php'); 
edit();
?>

<?php include(HEADER_TEMPLATE); ?>


<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome Completo</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Matrícula</label>
      <input type="text" class="form-control" name="customer['ie']" value="<?php echo $customer['ie']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Unidade</label>
      <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
    </div>
  </div>


  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Telefone</label>
      <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
    </div>    

    <div class="form-group col-md-2">
      <label for="campo3">Data de Inclusão</label>
      <input type="text" class="form-control" name="customer['date_inclu']" value="<?php echo $customer['date_inclu']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
    </div>
  </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="indexs.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>