<?php  echo $_POST['asunto'], $_POST['mensaje'];?>

<form id="contactform" action="prueba.php" method="POST">
	<div id="campos">
		<input name="correo" type="text"/>
		<input name="asunto" type="text"/>
		<textarea name="mensaje" type="text"></textarea>
		<button type="submit">Enviar mensaje</button>
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
	$('#contactform').submit(function(event){

		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data){
				console.log(data);
			},
			error: function(data){
				//Cuando la interacción retorne un error, se ejecutará esto.
			}
		}
	})
});


    function insertar() {

    $.ajax({
      type: 'POST',
      url: 'bd/insertar.php',
      data: $(this).serialize(),
      success: function(data){
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Eliminado correctamente',
          showConfirmButton: false,
          timer: 1000,
        })
      },
      error: function(data){
        //Cuando la interacción retorne un error, se ejecutará esto.
      }
    }
  }
</script>