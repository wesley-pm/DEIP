<?php 
  include_once("conexao.php");
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


  <div class="row">

    <div class="col-md-3">
    <label asp-for="PessoaNatureza" class="control-label"><b></b></label>
    <select name="id_categoria" id="id_categoria" class="form-control">
        <option value="">Selecione</option>
        <?php
        $result_cat = "SELECT * FROM categoria ORDER BY nome";
        $resultado_cat = mysqli_query($conn, $result_cat);
        while($row_cat = mysqli_fetch_assoc($resultado_cat) ) {
            echo '<option value="'.$row_cat['id'].'">'.$row_cat['nome'].'</option>';
        }
        ?>
    </select>
</div>

<div class="col-md-3">
    <label asp-for="PessoaNatureza" class="control-label"><b></b></label>
    <span class="carregando">Aguarde, carregando...</span>
    <select name="id_sub_categoria" id="id_sub_categoria" class="form-control">
        <option value="">Selecione</option>
    </select>
</div>

<div class="col-md-3">
    <label asp-for="PessoaNatureza" class="control-label"><b></b></label>
    <span class="carregando">Aguarde, carregando...</span>
    <select name="id_tri_categoria" id="id_tri_categoria" class="form-control">
        <option value="">Selecione</option>
    </select>
</div>

<div class="form-group col-md-2">
      <label for="campo3">Data da conclusão</label>
      <input type="text" required class="form-control" name="customer['date_inclu']">
</div>

<div class="col">
    <a href='listar.php'><br><button class="btn btn-primary" type="submit">Cadastrar</button></a>
</div>

</div>

</br>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
  

</form>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">

	$(function(){
		$('#id_categoria').change(function(){
			if( $(this).val() ) {
				$('#id_sub_categoria').hide();
				$('.carregando').show();
				$.getJSON('sub_categorias.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
					var options = '<option value="">Selecione</option>';	
					for (var i = 0; i < j.length; i++) {
						options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
					}	
					$('#id_sub_categoria').html(options).show();
					$('.carregando').hide();
				});
			} else {
				$('#id_sub_categoria').html('<option value="">– Selecione –</option>');
			} 
		});

		$('#id_sub_categoria').change(function(){
			if( $(this).val() ) {
				$('#id_tri_categoria').hide();
				$('.carregando').show();
				$.getJSON('tricategoria.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
					var options = '<option value="">Selecione</option>';	
					for (var i = 0; i < j.length; i++) {
						options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
					}	
					$('#id_tri_categoria').html(options).show();
					$('.carregando').hide();
				});
			} else {
				$('#id_tri_categoria').html('<option value="">– Selecione –</option>');
			} 
		});
	});
</script>

<?php include(FOOTER_TEMPLATE); ?>