<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Militar Nº<?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>Matrícula:</dt>
	<dd><?php echo $customer['ie']; ?></dd>

	<dt>Unidade:</dt>
	<dd><?php echo $customer['hood']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $customer['city']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $customer['state']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $customer['mobile']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Inclusão:</dt>
	<dd><?php echo $customer['date_inclu']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $customer['birthdate']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="indexs.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>