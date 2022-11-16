<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servicios en TIC | Iniciar sesion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- ico -->
  <link rel="shortcut icon" type="image/x-icon" href="img/fav.ico">

</head>
<body>
<style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
	<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container py-5 h-100" style="padding-bottom: 2rem!important;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5" >

            <div class="col-12">
            	<img src="img/cerebro.jpg" title="Inicio de sesion" width="100%" height="100%"/>
            </div>
            
            <br>
            <form action="index.php">
            	<div class="form-outline mb-4">
            		<label>Ingresa correo electrónico:</label>
	            	<input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Correo electrónico" />
	            </div>

	            <div class="form-outline mb-4">
	            	<label style="text-align: left;">Ingresa contraseña</label>
	              	<input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Contraseña" />
	              
	            </div>

	            <!-- Checkbox -->
	            <div class="form-check d-flex justify-content-start mb-4">
	              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
	              <label class="form-check-label" for="form1Example3">Recordar contraseña </label>
	            </div>

	            <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright © Todos los derechos reservados SERVICIOS TIC, S.A de C.V   |<a href="mailto:erojano@serviciostic.com.mx" style="text-decoration:none; color: #4750DC;" target="_blank"><b> Developed by ASER</b></a>
            </div>
            
		</div>
	</div>
</footer>
</body>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</html>