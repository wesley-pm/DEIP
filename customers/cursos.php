<?php 
include_once("conexao.php");
require_once('functions.php'); 
add(); 
?>

<?php include(HEADER_TEMPLATE); ?>

<style type="text/css">
	.carregando{
		color:#ff0000;
		display:none;
	}
</style>

<div class="container-fluid">
	
	<form action="" method="POST" class="center-form">

		<div class="row">

			<div class="col-md-2">
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

			<div class="col-md-4">
				<label asp-for="PessoaNatureza" class="control-label"><b></b></label>
				<span class="carregando">Aguarde, carregando...</span>
				<select name="id_sub_categoria" id="id_sub_categoria" class="form-control">
					<option value="">Selecione</option>
				</select>
			</div>

			<div class="col-md-4">
				<label asp-for="PessoaNatureza" class="control-label"><b></b></label>
				<span class="carregando">Aguarde, carregando...</span>
				<select name="id_tri_categoria" id="id_tri_categoria" class="form-control">
					<option value="">Selecione</option>
				</select>
			</div>




			<div class="col">

				<a href='listar.php'><br><button class="btn btn-primary" type="submit">Pesquisar</button></a>

			</div>

			<hr>



			<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$id_categoria = $_POST['id_categoria'];
				$id_sub_categoria = $_POST['id_sub_categoria'];
				$id_tri_categoria = $_POST['id_tri_categoria'];

				 //Receber o número da página
				$pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);

				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;  

                //Setar a quantidade de itens por página
				$qnt_result_pg = 8;

                //Calcular o início da visualização 
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg; 

				$result_pesquisar = "SELECT id, name, ie, hood, mobile FROM customers WHERE categoria_id = '$id_categoria' AND subcategoria_id = '$id_sub_categoria' AND tricategoria_id = '$id_tri_categoria' LIMIT $inicio, $qnt_result_pg";

				$resultado_pesquisar = mysqli_query($conn, $result_pesquisar);

				echo "<table class='table table-striped'>
				<thead>
				<tr>
				<th width='30%'>Nome</th>
				<th>Matrícula</th>
				<th>Unidade</th>
				<th>Telefone</th>
				</tr>
				</thead>
				<tbody>";

				while ($row_pesquisar = mysqli_fetch_assoc($resultado_pesquisar)){


					echo"<tr>
					<td>".$row_pesquisar['name']."</td>
					<td>".$row_pesquisar['ie']."</td>
					<td>".$row_pesquisar['hood']."</td>
					<td>".$row_pesquisar['mobile']."</td>

					<td class='actions text-right'>
					<a href='view.php?id=".$row_pesquisar['id']."' class='btn btn-sm-4 btn-success'><i class='fa fa-eye'></i> Visualizar</a>
					</td>
					</tr>";
				}

				echo"</tbody>
				     </table>";

					 //Paginação - Somar a quantidade de usuários
				$result_pg = "SELECT COUNT(id) AS num_result FROM customers";
				$resultado_pg = mysqli_query ($conn, $result_pg);
				$row_pg = mysqli_fetch_assoc ($resultado_pg);

                //Quantidade de página
				$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                //Limitar os links antes e depois
				$max_links = 2;
				echo "<nav aria-label='paginacao-blog'>";
                echo "<ul class='pagination justify-content-center'>";
                echo "<li class='page-item'>";
				echo "<a class='page-link' href='cursos.php?pagina=1' tabindex='-1'>Primeira</a>";
                echo "</li>";

				for ($pag_ant= $pagina - $max_links; $pag_ant <= $pagina  - 1; $pag_ant++) { 
					if ($pag_ant >= 1){
						echo "<li class='page-item'><a class='page-link' href='cursos.php?pagina=$pag_ant'>$pag_ant</a></li>";
					}

				}

				echo "<li class='page-item active'>";
				echo "<a class='page-link' href='#'>$pagina <span class='sr-only'></span></a>";
				echo "</li>";

				for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep ++){
					if ($pag_dep <= $quantidade_pg){
						echo "<li class='page-item'><a class='page-link' href='cursos.php?pagina=$pag_dep'>$pag_dep</a></li>";
					}

				}
		
				echo "<li class='page-item'>";
				echo "<a class='page-link' href='cursos.php?pagina=$quantidade_pg'> Última </a>";
				echo "</li>";


			}

			?>

		</div>

	</form>

</div>

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


