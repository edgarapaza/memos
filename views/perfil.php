<?php
include_once "header.php";
$idproyecto = $_REQUEST['idproyecto'];
require "../models/listas.model.php";
$listas = new Listas();
$data = $listas->ListaPerfil();
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
              <h5 class="card-title">eSCOJA UNA OPCION</h5>

              <input type="text" value="<?php echo $idproyecto; ?>">

                <table class="table datatable">
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
                    <tr>
                      <td scope="row"><?php echo $i; ?></td>
                      <td><?php  echo $fila['descripcion'];?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
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