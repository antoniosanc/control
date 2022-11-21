<?php include 'header.php';?>


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
    <!-- Content Header  (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EMPLEADOS STIC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-info btn-block btn-flat"  data-toggle="modal" data-target="#modal-info">&nbsp;Agregar empleado <i class="fa-solid fa-circle-plus" ></i></button>
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
                <h3 class="card-title">Tabla de empleados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Puesto</th>
                    <th>CURP</th>
                    <th>RFC</th>
                    <th>NSS</th>
                    <th>Telefono</th>
                    <th>IMEI</th>
                    <th>Estatus</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      $sql = "SELECT * FROM `empleados_stic` " ;
                      $consulta = mysqli_query($conexion, $sql);

                      while($row = mysqli_fetch_array($consulta)){
                      $clave= 'eliminar';
                      $id = $row['id_empleado'];
                      $nombre = $row['nombre'];
                      $correo = $row['correo'];
                      $puesto = $row['puesto'];
                      $curp = $row['curp'];
                      $rfc = $row['rfc'];
                      $nss = $row['nss'];
                      $telefono = $row['telefono'];
                      $imei = $row['imei'];
                      $status = $row['status'];          
                             
                    ?>
                    <tr>
                      <td><a title="<?php echo $nombre?>" ><?php echo $nombre;?></a></td>
                      <td><a title="<?php echo $correo?>"><?php echo $correo;?></a></td>
                      <td><a title="<?php echo $puesto?>"><?php echo $puesto;?></a></td>
                      <td><a title="<?php echo $curp?>"><?php echo $curp;?></a></td>
                      <td><a title="<?php echo $rfc?>"><?php echo $rfc;?></a></td>
                      <td><a title="<?php echo $nss?>"><?php echo $nss;?></a></td>                 
                      <td><a title="<?php echo $telefono?>"><?php echo $telefono;?></a></td>
                      <td><a title="<?php echo $imei?>"><?php echo $imei;?></a></td>
                      <?php if ($status =='Activo'){
                        ?>
                        <td style="background-color:#74e56380"><a title="<?php echo $status?>"><?php echo $status;?></a></td>
                      <?php
                      }else{
                        ?>
                        <td style="background-color:#e5636380"><a title="<?php echo $status?>"><?php echo $status;?></a></td>
                        <?php 
                      }?>
                      
                      <?php if ($status =='Activo'){
                        ?>
                        <td><a  title="Dar de baja" class="btn btn-danger btn-circle" onclick="inactivar('<?php echo $nombre?>');"><i class="fa-solid fa-ban"></i></a></td>
                      <?php
                      }else{
                        ?>
                        <td><a  title="Dar de alta" class="btn btn-success btn-circle" onclick="activar('<?php echo $nombre?>');"><i class="fa-solid fa-check"></i></a></td>
                        <?php 
                      }?>
                                         

                    </tr>
                    <?php 
                      } 
                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    



</div>
</body>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  //activar empleado
function activar(nombre) {
  var clave = 'actualizar';
  var parametro = {"nombre":nombre, "clave":clave};
  Swal.fire({
    title: '¿Estas seguro activar?',
    text: nombre,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {

    if (result.isConfirmed) {
      $.ajax({
        data:parametro,
        url:'database/empleado/activo.php',
        type: 'POST',
      });

      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Actualizado correctamente',
        showConfirmButton: false,
        timer: 1000,
      });
      setTimeout(function () { location.reload(1); }, 1000);
    }

  });
} 
  //inactivar empleado 
function inactivar(nombre) {
  var clave = 'eliminar';
  var parametros = {"nombre":nombre, "clave":clave};
  Swal.fire({
    title: '¿Estas seguro desactivar?',
    text: nombre,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',
    cancelButtonText: 'No'
  }).then((result) => {

    if (result.isConfirmed) {
      $.ajax({
        data:parametros,
        url:'database/empleado/inactivo.php',
        type: 'POST',
      });

      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Actualizado correctamente',
        showConfirmButton: false,
        timer: 1000,
      });
      setTimeout(function () { location.reload(1); }, 1000);
    }

  });
} 
  //Descargar la tabla
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

</html>
