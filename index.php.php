<?php include_once "header.php"; ?>

<script type="text/javascript">
    function mifuncion(){
    	self.close();
    }
</script>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>
				<?php $msg = $_REQUEST['mensaje'];  echo $msg; ?>
			</h2>
			<form>
				<a href="listado.php" class="btn btn-primary">Cerrar</a>
			</form>
		</div>
	</div>
</div>