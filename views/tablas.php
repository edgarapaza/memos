<?php include_once("header.php"); ?>

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
              <h5 class="card-title">Listado Personal</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del Trabajador</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Options</th>
                    <th scope="col">Fecha</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php
                    include "../models/listado.model.php";
                    $listado = new Listado();
                    $data = $listado->ListadoPersonal();
                    
                    $i = 1;
                    while($fila = $data->fetch_array(MYSQLI_ASSOC))
                    {
                      $nivel =  $fila['niv_usu'];
                  ?>

                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php  echo $fila['per'];?></td>                
                    <td>
                      <?php
                        #echo $fila['niv_usu'];
                        if($fila['niv_usu'] == 1)
                        {
                          echo "Administrador";
                        }
                        if($fila['niv_usu'] == 2)
                        {
                          echo "Jefe de Oficina";
                        }
                        if($fila['niv_usu'] == 3)
                        {
                          echo "Personal";
                        }
                      ?>
                    </td>
                    <td>
                      <?php
                        if($fila['chk_usu']==1)
                        {
                          echo "<span class='badge bg-success'>Activado</span>";
                        }else{
                          echo "<span class='badge bg-danger'>Inactivo</span>";
                        }
                      ?>
                    </td>
                    <td></td>

                    <td>2016-05-25</td>
                  </tr>
                  <?php
                      $i++;
                    }
                    
                  ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include_once("footer.php"); ?>