    <?php include 'header.php'; ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ACTIVIDADES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de actividades</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>OT</th>
                    <th>Cliente</th>
                    <th>Actividad</th>
                    <th>Ingeniero de campo 1</th>
                    <th>Ingeniero de campo 2</th>
                    <th>Numero de cotizacion</th>
                    <th>Estatus de la actividad</th>
                    <th>Observaciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      $sql = "SELECT * FROM `actividades` " ;
                      $consulta = mysqli_query($conexion, $sql);
                      if($consulta->num_rows === 0){
                    ?>
                    <tr>
                      <td colspan="8" style="text-align: center;">Sin datos</td>
                    </tr>
                    <?php

                      }else{

                      while($row = mysqli_fetch_array($consulta)){
                      $ot = $row['ot'];
                      $cliente = $row['cliente'];
                      $tipo = $row['tipo_actividad'];
                      $idc1 = $row['idc_1'];
                      $idc2 = $row['idc_2'];
                      $num_cotizacion = $row['num_cotizacion'];
                      $estatus = $row['estatus_actividad'];
                      $observacion = $row['obsevacion'];
                      
                      }
                    ?>
                    <tr>
                      <td><?php echo $ot; ?></td>
                      <td><?php echo $cliente; ?></td>
                      <td><?php echo $tipo;; ?></td>
                      <td><?php echo $idc1; ?></td>
                      <td><?php echo $idc2; ?></td>
                      <td><?php echo $num_cotizacion; ?></td>                    
                      <td><?php echo $estatus; ?></td>                    
                      <td><?php echo $observacion; ?></td>                    

                    </tr>
                    <?php 
                      } 
                    ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>