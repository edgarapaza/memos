<?php
include_once "header.php";
require "../models/listas.model.php";
$listas = new Listas();
$data = $listas->ListaProyectos();
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php">Home</a></li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LISTADO DE PROYECTOS</h5>
              <table class="table datatable">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre Proyecto</th>
                                  <th scope="col">Nombre Corto</th>
                                  <th scope="col">CUI</th>
                                  <th scope="col">Distrito</th>
                                  <th scope="col">opciones</th>
                                </tr>
                              </thead>

                              <tbody>

                                <?php
                                  $i = 1;
                                  while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php  echo $fila['nomproyecto'];?></td>
                                  <td><?php  echo $fila['nomcorto'];?></td>
                                  <td><?php  echo $fila['cui'];?></td>
                                  <td><?php  echo $fila['distrito'];?></td>
                                  <td>
                                    <a href="menu.php?idproyecto=<?php echo $fila['idproyecto']; ?>">Memos>></a>
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

<?php include_once("footer.php");?>