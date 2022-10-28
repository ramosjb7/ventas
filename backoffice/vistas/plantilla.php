<?php 

session_start();

$ruta = ControladorGeneral::ctrRuta();

if(!isset($_SESSION["validarSesion"])){

	echo '<script>

		window.location = "'.$ruta.'ingreso";

	</script>';

	return;

}

$item = "id_usuario";
$valor = $_SESSION["id"];

$usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);



?>


<!DOCTYPE html>

<html>

<head>

  	<meta charset="utf-8">

  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  	<title>Backoffice | Camino Real</title>

  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--=====================================
	Vínculos CSS
	======================================-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  	<!-- Theme style -->
  	<link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">

  	<!-- overlayScrollbars -->
  	<link rel="stylesheet" href="vistas/css/plugins/OverlayScrollbars.min.css">

  	<!-- jdSlider -->
	<link rel="stylesheet" href="vistas/css/plugins/jdSlider.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="vistas/css/plugins/select2.min.css">

	<!-- DataTables -->
	<link rel="stylesheet" href="vistas/css/plugins/dataTables.bootstrap4.min.css">	
	<link rel="stylesheet" href="vistas/css/plugins/responsive.bootstrap.min.css">

  	<!-- estilo personalizado -->
  	<link rel="stylesheet" href="vistas/css/style.css">

	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

	<!--=====================================
	Vínculos calendar
	======================================-->


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">	 

  	<!--=====================================
	Vínculos JS
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- AdminLTE App -->
	<script src="vistas/js/plugins/adminlte.min.js"></script>

	<!-- overlayScrollbars -->
	<script src="vistas/js/plugins/jquery.overlayScrollbars.min.js"></script>

	<!-- jdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="vistas/js/plugins/jdSlider.js"></script>

	<!-- Select2 -->	
	<!-- https://github.com/select2/select2 -->
	<script src="vistas/js/plugins/select2.full.min.js"></script>

	<!-- InputMask -->	
	<!-- https://github.com/RobinHerbots/Inputmask -->
	<script src="vistas/js/plugins/jquery.inputmask.js"></script>

	<!-- jSignature -->
	<!-- https://www.jqueryscript.net/other/Signature-Field-Plugin-jQuery-jSignature.html -->
	<script src="vistas/js/plugins/jSignature.js"></script>
	<script src="vistas/js/plugins/jSignature.CompressorSVG.js"></script>

	<!-- SWEET ALERT 2 -->	
	<!-- https://sweetalert2.github.io/ -->
	<script src="vistas/js/plugins/sweetalert2.all.js"></script>

	
	<!-- DataTables 
	https://datatables.net/-->
  	<script src="vistas/js/plugins/jquery.dataTables.min.js"></script>
  	<script src="vistas/js/plugins/dataTables.bootstrap4.min.js"></script> 
	<script src="vistas/js/plugins/dataTables.responsive.min.js"></script>
  	<script src="vistas/js/plugins/responsive.bootstrap.min.js"></script>	

	<!-- Calendario/-->
	<script  src="vistas/js/moment.js"></script>	
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>


	
	
	
	



</head>

<body class="hold-transition sidebar-mini sidebar-collapse">




<div class="wrapper">

<?php 

include "paginas/modulos/header.php";

include "paginas/modulos/menu.php";

$item = null;
$valor = null;
$recepciones= ControladorUsuarios::ctrMostrarRecepciones($item, $valor);
//echo '<pre>'; print_r($recepciones); echo '</pre>';

/*=============================================
Páginas del sitio
=============================================*/

if(isset($_GET["pagina"])){

	if( $_GET["pagina"] == "inicio" ||
		$_GET["pagina"] == "perfil" ||
		$_GET["pagina"] == "usuarios" ||
		$_GET["pagina"] == "reserva" ||
		$_GET["pagina"] == "recepcion" ||
		$_GET["pagina"] == "verificacion-salidas" ||
		$_GET["pagina"] == "clientes" ||
		$_GET["pagina"] == "soporte" ||
		$_GET["pagina"] == "salir"){

		include "paginas/".$_GET["pagina"].".php";

	}

	else if( $_GET["pagina"] == "vender-productos" ||
		$_GET["pagina"] == "catalogo-productos" ){

		include "paginas/vender.php";
	}

	else{

		include "paginas/error404.php";
	}

}else{

	include "paginas/inicio.php";
}


include "paginas/modulos/footer.php";

 ?>

</div>


<script src="vistas/js/inicio.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/habitaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
		headerToolbar: {
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
            },
		locale: 'es',

		defaultView: 'month',
		navLinks: true,
		editable: true,
		eventLimit: true, 
		selectable: true,
		selectHelper: false,

		//Nuevo Evento
        select: function(start, end){
          $("#exampleModal").modal();
          $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));
       
          var valorFechaFin = end.format("DD-MM-YYYY");
          var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
          $('input[name=fecha_fin').val(F_final);  

        },

		events: [
    		
			{
			<?php foreach ($recepciones as $key => $value) ?>
				
      		title: "<?php echo $value['id_persona']; ?>", 
      		start: "<?php echo $value['fecha_ingreso']; ?>", 
      		end: "<?php echo $value['fecha_salida']; ?>", 
			color: "red"
			},			
			
			
			
  		],

					 //Eliminar Evento
			 eventRender: function(event, element) {
          element
          .find(".fc-content")
          .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");
    
        //Eliminar evento
          element.find(".closeon").on("click", function() {

        var pregunta = confirm("Deseas Borrar este Evento?");   
        if (pregunta) {

        $("#calendar").fullCalendar("removeEvents", event._id);

        $.ajax({
            type: "POST",
            url: 'deleteEvento.php',
            data: {id:event._id},
            success: function(datos)
            {
              $(".alert-danger").show();

              setTimeout(function () {
                $(".alert-danger").slideUp(500);
              }, 3000); 

            }
        });
      }
    });
  },

  //Moviendo Evento Drag - Drop
  eventDrop: function (event, delta) {
            var idEvento = event._id;
            var start = (event.start.format('DD-MM-YYYY'));
            var end = (event.end.format("DD-MM-YYYY"));

             $.ajax({
            url: 'drag_drop_evento.php',
            data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
            type: "POST",
            success: function (response) {
            // $("#respuesta").html(response);
        }
    });
},


 //Modificar Evento del Calendario 
 eventClick:function(event){
                var idEvento = event._id;
                $('input[name=idEvento').val(idEvento);
                $('input[name=evento').val(event.title);
                $('input[name=fecha_inicio').val(event.start.format('DD-MM-YYYY'));
                $('input[name=fecha_fin').val(event.end.format("DD-MM-YYYY"));

                $("#modalUpdateEvento").modal();
              },


              });

			  calendar.render();
            //Oculta mensajes de Notificacion
              setTimeout(function () {
                $(".alert").slideUp(300);
              }, 3000); 
        
		
      });

    </script>


	

</body>

</html>