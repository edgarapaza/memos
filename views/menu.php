<?php
include_once "header.php";
$idproyecto = $_REQUEST['idproyecto'];
?>

  <main id="main" class="main">

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

              <input type="text" value="<?php echo $idproyecto; ?>">
              <br>
              <a href="perfil.php?idproyecto=<?php echo $idproyecto; ?>" class="btn btn-success">PERFIL</a>
              <br>
              <br>
              <a href="#" class="btn btn-info">EXPEDIENTE</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>