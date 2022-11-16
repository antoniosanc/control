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
            <h1>FACTURACION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-info btn-block btn-flat"  data-toggle="modal" data-target="#modal-info">&nbsp;Agregar facturación <i class="fa-solid fa-circle-plus" ></i></button>
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
                <h3 class="card-title">Tabla de facturaciones</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>OT</th>
                    <th>Cliente</th>
                    <th>Fecha de envio</th>
                    <th>COT</th>
                    <th>OC</th>
                    <th>Factura</th>
                    <th>Fecha de envio</th>
                    <th>Monto</th>
                    <th>Fecha de pago</th>
                    <th> </th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      $sql = "SELECT * FROM `facturaciones` " ;
                      $consulta = mysqli_query($conexion, $sql);
                      

                      while($row = mysqli_fetch_array($consulta)){
                      $ot = $row['ot'];
                      $cliente = $row['cliente'];
                      $fechacot = $row['fecha_enviocot'];
                      $cot = $row['cot'];
                      $oc = $row['oc'];
                      $factura = $row['factura'];
                      $fechafac = $row['fecha_enviofac'];
                      $monto = $row['monto'];
                      $fechapago = $row['fecha_pago'];
                      
                    ?>
                    <tr>
                      <td><?php echo $ot; ?></td>
                      <td><?php echo $cliente; ?></td>
                      <td><?php echo $fechacot; ?></td>
                      <td><?php echo $cot; ?></td>
                      <td><?php echo $factura; ?></td>
                      <td><?php echo $fechafac; ?></td>
                      <td><?php echo $monto; ?></td>
                      <td><?php echo $fechapago; ?></td>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nueva Facturación</h4> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- general form elements disabled -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Agregar empleados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <form id="formulario" action="bd/enviar_factura.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>OT</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ot">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ciente</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="cliente">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Fecha de envio cotización </label>
                        <input type="date" class="form-control" placeholder="Enter ..." name="fechacot" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>COT</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="cot" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>OC</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="oc">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Factura</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="factura">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Fecha de envio factura</label>
                        <input type="date" class="form-control" placeholder="Enter ..." name="fechafac">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Monto</label>
                        <input type="date" class="form-control" placeholder="Enter ..." name="monto">
                      </div>
                    </div>
                    <div class="col-sm-6" style="text-align: center;">
                      <div class="form-group">
                        <label>Fecha de pago</label>
                        <input type="date" class="form-control" placeholder="Enter ..." name="fechapago" >
                      </div>
                    </div>
                  </div>
                  <div class="col sm 12" style="text-align: center;">
                    <button type="sumit" id="btnEnviar" class="btn btn-success toastsDefaultSuccess" onclick="aceptar();">
                      Aceptar
                    </button>
                  </div>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
        <!-- modal -->
      </div>
      <div class="modal-footer justify-content-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->

  <?php include 'bd/enviar_factura.php' ?>
</div>

      <!-- /.modal -->

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
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
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