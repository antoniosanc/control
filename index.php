<?php include 'header.php' ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CONTOL DE ACTIVIDADES</h1>
            <p><h6 class="m-0" ><b>Bienvenido:</b> Fernando de la Trinidad</h6></p>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-indigo color-palette">
              <div class="inner">
                <h3>-</h3>

                <p>COTIZACIONES</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-calculator"></i>
              </div>
              <a href="cotizaciones.php" class="small-box-footer">Mostar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>-</h3>

                <p>ACTIVIDADES</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-business-time"></i>
              </div>
              <a href="actividades.php" class="small-box-footer">Mostar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6" href="#">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>-</h3>

                <p>FACTURACION</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-invoice-dollar"></i>
              </div>
              <a href="facturacion.php" class="small-box-footer">Mostar más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>-</h3>

                <p>EMPLEADOS</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user"></i>
              </div>
              <a href="empleados.php?n=Empleados STIC" class="small-box-footer">Mostar más  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa-solid fa-business-time"></i>
                  Actividades
                </h3>
              </div>
            </div>
          </section>
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa-solid fa-user"></i>
                  Empleados
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <!-- <th>N°</th> -->
                      <th>Nombre</th>
                      <th>RFC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql = "SELECT * FROM `empleados_stic` " ;
                      $consulta = mysqli_query($conexion, $sql);
                      while($row = mysqli_fetch_array($consulta)){
                      $id = $row['id_empleado'];
                      $nombre = $row['nombre'];
                      $correo = $row['correo'];
                      $puesto = $row['puesto'];
                      $rfc = $row['rfc'];
                      $telefono = $row['telefono'];
                      
                    ?>
                    <tr>
                      <!-- <td><//?php //echo $id; ?></td> -->
                      <td><?php echo $nombre; ?></td>
                      <td><?php echo $rfc; ?></td>                    
                    </tr>
                    <?php 
                      } 
                    ?>
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </section>
        </div>

      </div>
    </section>
  </div>



<?php include 'footer.php'; ?>