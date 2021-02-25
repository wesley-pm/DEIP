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

<div class="container">
		<div class="row">
			<div class="col">
				<h4>Capacitação e Atualização</h4>
			</div>
		</div>
		<div class="row">

			<div class="col-md-8 py-1">
				<div class="card">
					<div class="card-body">
						<canvas id="chDonut1"></canvas>
					</div>
				</div>
			</div>
		</div>

        <hr>

		<div class="row">
			<div class="col">
				<h4>Formação e Aperfeiçoamento</h4>
			</div>
		</div>
		<div class="row">

			<div class="col-md-8 py-1">
				<div class="card">
					<div class="card-body">
						<canvas id="chDonut2"></canvas>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col">
				<h4>Instrução e Treinamento</h4>
			</div>
		</div>
		<div class="row">

			<div class="col-md-8 py-1">
				<div class="card">
					<div class="card-body">
						<canvas id="chDonut3"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	

	<script src="assets/js/jquery-3.4.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

	<script>
		<?php

    $result_cat = "SELECT * FROM customers";
    $resultado_cat = mysqli_query($conn, $result_cat);

    $cont_medio = 0;
    $cont_tecnico = 0;
    $cont_graduacao = 0;
    $cont_posgraduacao = 0;
    $cont_mestrado = 0;
    $cont_doutorado = 0;

    $cont_cfsd = 0;
    $cont_cfc = 0;
    $cont_cfs = 0;
    $cont_cas = 0;
    $cont_cho = 0;
    $cont_cfo = 0;
    $cont_cao = 0;
    $cont_csp = 0;

    $cont_coesp = 0;
    $cont_risc = 0;
    $cont_cate = 0;
    $cont_patamo = 0;
    $cont_choque = 0;
    $cont_k9 = 0;
    $cont_motamo = 0;
    $cont_agente_de_transito = 0;


    while($row_cat = mysqli_fetch_assoc($resultado_cat) ) {

      if ($row_cat['tricategoria_id'] == '28')
        $cont_medio++;
      else if ($row_cat['tricategoria_id'] == '1')
        $cont_tecnico++;
      else if ($row_cat['tricategoria_id'] == '2')
        $cont_graduacao++;
      else if ($row_cat['tricategoria_id'] == '3')
        $cont_posgraduacao++;
      else if ($row_cat['tricategoria_id'] == '5')
        $cont_mestrado++;
      else if ($row_cat['tricategoria_id'] == '6')
        $cont_doutorado++;
      else if ($row_cat['tricategoria_id'] == '7')
        $cont_cfsd++;
      else if ($row_cat['tricategoria_id'] == '8')
        $cont_cfc++;
      else if ($row_cat['tricategoria_id'] == '9')
        $cont_cfs++;
      else if ($row_cat['tricategoria_id'] == '10')
        $cont_cas++;
      else if ($row_cat['tricategoria_id'] == '11')
        $cont_cho++;
      else if ($row_cat['tricategoria_id'] == '12')
        $cont_cfo++;
      else if ($row_cat['tricategoria_id'] == '13')
        $cont_cao++;
      else if ($row_cat['tricategoria_id'] == '14')
        $cont_csp++;
      else if ($row_cat['tricategoria_id'] == '15')
        $cont_coesp++;
      else if ($row_cat['tricategoria_id'] == '16')
        $cont_risc++;
      else if ($row_cat['tricategoria_id'] == '17')
        $cont_cate++;
      else if ($row_cat['tricategoria_id'] == '18')
        $cont_patamo++;
      else if ($row_cat['tricategoria_id'] == '19')
        $cont_choque++;
      else if ($row_cat['tricategoria_id'] == '20')
        $cont_k9++;
      else if ($row_cat['tricategoria_id'] == '21')
        $cont_motamo++;
      else if ($row_cat['tricategoria_id'] == '22')
        $cont_agente_de_transito++;
    
    }

    ?>

// chart colors
var colors = ['#007bff','#28a745','#005da8','#c3e6cb','#0d2012','#6c757d', '#3da9ff', '#b8dfff'];

/* 3 donut charts */
var donutOptions = {
  cutoutPercentage: 0, 
  legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
};

// donut 1
var chDonutData1 = {
    labels: ['Médio', 'Técnico', 'Graduação', 'Pós-graduação', 'Mestrado', 'Doutorado'],
    datasets: [
      {
        backgroundColor: colors.slice(0,6),
        borderWidth: 2,
        data: [<?php echo $cont_medio; ?>, <?php echo $cont_tecnico; ?>, <?php echo $cont_graduacao; ?>, <?php echo $cont_posgraduacao; ?>, <?php echo $cont_mestrado; ?>, <?php echo $cont_doutorado; ?>]
      }
    ]
};

var chDonut1 = document.getElementById("chDonut1");
if (chDonut1) {
  new Chart(chDonut1, {
      type: 'pie',
      data: chDonutData1,
      options: donutOptions
  });
}

// donut 2
var chDonutData2 = {
    labels: ['CFSD', 'CFC', 'CFS', 'CAS', 'CHO', 'CFO', 'CAO', 'CSP'],
    datasets: [
      {
        backgroundColor: colors.slice(0,8),
        borderWidth: 2,
        data: [<?php echo $cont_cfsd; ?>, <?php echo $cont_cfc; ?>, <?php echo $cont_cfs; ?>, <?php echo $cont_cas; ?>, <?php echo $cont_cho; ?>, <?php echo $cont_cfo; ?>, <?php echo $cont_cao; ?>, <?php echo $cont_csp; ?>]
      }
    ]
};
var chDonut2 = document.getElementById("chDonut2");
if (chDonut2) {
  new Chart(chDonut2, {
      type: 'pie',
      data: chDonutData2,
      options: donutOptions
  });
}

// donut 3
var chDonutData3 = {
    labels: ['COESP', 'RISC', 'CATE', 'PATAMO', 'CHOQUE', 'K9', 'MOTAMO', 'AGÊNTE DE TRÂNSITO'],
    datasets: [
      {
        backgroundColor: colors.slice(0,8),
        borderWidth: 2,
        data: [<?php echo $cont_coesp; ?>, <?php echo $cont_risc; ?>, <?php echo $cont_cate; ?>, <?php echo $cont_patamo; ?>, <?php echo $cont_choque; ?>, <?php echo $cont_k9; ?>, <?php echo $cont_motamo; ?>, <?php echo $cont_agente_de_transito; ?>]
      }
    ]
};
var chDonut3 = document.getElementById("chDonut3");
if (chDonut3) {
  new Chart(chDonut3, {
      type: 'pie',
      data: chDonutData3,
      options: donutOptions
  });
}
		
	</script>


<?php include(FOOTER_TEMPLATE); ?>