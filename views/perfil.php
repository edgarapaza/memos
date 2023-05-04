<?php
include_once "header.php";
$idproyecto = $_REQUEST['idproyecto'];
require "../models/listas.model.php";
$listas = new Listas();
$data = $listas->ListaPerfil();
$numtotal = $data->num_rows;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <main id="main" class="main" onload="">

	<div class="pagetitle">
	  <h1>Data Tables</h1>
	  <nav>
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
		  <li class="breadcrumb-item">Tables</li>
		  <li class="breadcrumb-item active">Data</li>
		</ol>
	  </nav>
	</div><!-- End Page Title -->

	<section class="section">
	  <div class="row">
		<div class="col-lg-12">



		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title">ESCOJA UNA OPCION</h5>

			  <input type="hidden" id="idproyecto" name="idproyecto" value="<?php echo $idproyecto; ?>">
			  <input type="hidden" id="numtotal" name="numtotal" value="<?php echo $numtotal; ?>">

				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Descripcion</th>
							<th scope="col">Responsable</th>
							<th scope="col">opciones</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$i = 1;

						while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
						?>
						<tr id="<?php echo $i;?>" data-pip="<?php echo $fila['idpip']; ?>" data-personal="<?php echo $_SESSION['personal'];?>" >
							<td scope="row"><?php echo $i; ?></td>
							<td><?php  echo $fila['descripcion'];?></td>
							<td>
								<div id="combo<?php echo $i;?>"></div>

							</td>
							<td>
								<input type="text" id="servicioSelecionado">
							 	<a href="#?idproyecto=<?php echo $fila['idpip']; ?>">Memos>></a>
							</td>
						</tr>
						<?php
						  $i++;
						  }
						?>
					</tbody>
				</table>

			</div>
		  </div>

		</div>
	  </div>
	</section>

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>

  <script type="text/javascript">
	$(document).ready(function () {
		let total = document.getElementById('numtotal').value;

		$.ajax({
			url: 'combo.php',
			success: function(response)
			{
				for (var i = 1; i<total;i++)
				{
					$("#combo"+i).html(response);
				}
			},
			error: function() {
				alert('Error');
			}
		});

		$(document).on('change', '#idpersonal', function(event) {
			
		    $('#servicioSelecionado').val($("#idpersonal option:selected").val());
			var uno = $("#idpersonal option:selected").val();
			alert(uno);
		});

		


		// cuando se pulsa un enlace con data-id
		$("tr").on("click", function() {
			// guardar el valor del data-id en el localstorage
			//var idpersonal = document.getElementById("idpersonal");
			//var webcard = document.getElementById("2");
			// En la propiedad dataset del elemento estarán todos los atributos data-*
			//var strWeb = webcard.dataset.pip; //Resultado: Estrada Web Group
			//var strPer = webcard.dataset.personal; //Resultado: Estrada Web Group
						
			alert("data-index: ");
			//localStorage.setItem("data-id", $(this).attr("data-id"));
		});
	});
  </script>