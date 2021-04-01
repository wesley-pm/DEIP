<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">

		<div class="col-sm-4">
			<h2>Militares</h2>
		</div>

		<div class="col-sm-4">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>


		<div class="col-sm-4 text-right h2">
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Militar</a>
			<a class="btn btn-default" href="indexs.php"><i class="fa fa-refresh"></i> Atualizar</a>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th width="30%">Nome</th>
			<th>Matrícula</th>
			<th>Unidade</th>
			<th>Contato</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($customers) : ?>
			<?php foreach ($customers as $customer) : ?>
				<tr>
					<td><?php echo $customer['id']; ?></td>
					<td><?php echo $customer['name']; ?></td>
					<td><?php echo $customer['ie']; ?></td>
					<td><?php echo $customer['hood']; ?></td>
					<td><?php echo $customer['mobile']; ?></td>
					<td class="actions text-right">
						<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="6">Nenhum registro encontrado.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table><div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li><a>Anterior</a></li>
				<li><a>1</a></li>

	
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
</div> <!-- /#main -->


<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>