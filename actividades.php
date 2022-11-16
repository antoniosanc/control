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
              <button type="button" class="btn btn-info btn-block btn-flat"  data-toggle="modal" data-target="#modal-info">&nbsp;Agregar actividad <i class="fa-solid fa-circle-plus" ></i></button>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="font-size: 13px;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de actividades</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>OT</th>
                    <th>Cliente</th>
                    <th>Actividad</th>
                    <th>IDC 1</th>
                    <th>IDC 2</th>
                    <th>Numero de cotizacion</th>
                    <th>Estatus de la actividad</th>
                    <th>Observaciones</th>
                    <th> </th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      $sql = "SELECT * FROM `actividades` " ;
                      $consulta = mysqli_query($conexion, $sql);
                      
                    

                      while($row = mysqli_fetch_array($consulta)){
                      $ot = $row['ot'];
                      $cliente = $row['cliente'];
                      $tipo = $row['tipo_actividad'];
                      $idc1 = $row['idc_1'];
                      $idc2 = $row['idc_2'];
                      $num_cotizacion = $row['num_cotizacion'];
                      $estatus = $row['estatus_actividad'];
                      $observacion = $row['obsevacion'];
                      
                      
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
                      <td><a class="btn btn-danger btn-circle" onclick="eliminar('<?php echo $nombre?>');" ><i class='fas fa-trash-alt'></i></a></td>                    

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

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Info Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php include 'footer.php'; ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf"]
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