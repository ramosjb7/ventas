
/*=============================================
TABLA HABITACIONES
=============================================*/

$.ajax({

	url:"ajax/tabla-habitaciones.ajax.php",
	success: function(respuesta){
		
		console.log("respuesta", respuesta);
	}

});

$(".tablaHabitaciones").DataTable({
	"ajax":"ajax/tabla-habitaciones.ajax.php",
 	"deferRender": true,
  	"retrieve": true,
  	"processing": true,
	"language": {

	    "sProcessing":     "Procesando...",
	    "sLengthMenu":     "Mostrar _MENU_ registros",
	    "sZeroRecords":    "No se encontraron resultados",
	    "sEmptyTable":     "Ningún dato disponible en esta tabla",
	    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
	    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
	    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	    "sInfoPostFix":    "",
	    "sSearch":         "Buscar:",
	    "sUrl":            "",
	    "sInfoThousands":  ",",
	    "sLoadingRecords": "Cargando...",
	    "oPaginate": {
	      "sFirst":    "Primero",
	      "sLast":     "Último",
	      "sNext":     "Siguiente",
	      "sPrevious": "Anterior"
	    },
	    "oAria": {
	        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
	        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	    }

   }

});



document.addEventListener('DOMContentLoaded', function(){


    //NUEVO ROL
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e) {
        e.preventDefault();

        var strNumeroHabitacion = document.querySelector('#txtNumeroHabitacion').value;
        var strDescripcion = document.querySelector('#txtDescripcion').value;
        var intPrecio = document.querySelector('#txtPrecioNoche').value;   
		var strEstado = document.querySelector('#txtEstadoHabitacion').value;
        var strCategoria = document.querySelector('#txtCategoriaHabitacion').value; 
		var intPiso = document.querySelector('#txtNumeroPiso').value;         
        if(strNumeroHabitacion == '' || strDescripcion == '' || intPrecio == '' || strEstado == '' 
		|| strCategoria == '' || intPiso == '' )
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = 'ajax/roles.php'; 
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
                if(request.status == 200){
            
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    swal("Roles de usuario", objData.msg ,"success");
                    tableRoles.api().ajax.reload(function(){ 
                        fntEditRol();
                        fntDelRol();
                    });
                }else{
                    swal("Error ", objData.msg , "error");
                }              
    }

    window.addEventListener('load', function() {
        fntEditRol();
        fntDelRol();
    }, false);
    
    function fntEditRol(){
        var btnEditRol = document.querySelectorAll(".btnEditRol");
        btnEditRol.forEach(function(btnEditRol) {
            btnEditRol.addEventListener('click', function(){
    
                document.querySelector('#titleModal').innerHTML ="Actualizar Rol";
                document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
                document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
                document.querySelector('#btnText').innerHTML ="Actualizar";
    
                var idrol = this.getAttribute("rl");
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl  = "";
                request.open("GET",ajaxUrl ,true);
                request.send();
    
                request.onreadystatechange = function(){
                    if(request.readyState == 4 && request.status == 200){
                        
                        var objData = JSON.parse(request.responseText);
                        if(objData.status)
                        {
                            document.querySelector("#idRol").value = objData.data.idrol;
                            document.querySelector("#txtNombre").value = objData.data.nombrerol;
                            document.querySelector("#txtDescripcion").value = objData.data.descripcion;
    
                            if(objData.data.status == 1)
                            {
                                var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                            }else{
                                var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                            }
                            var htmlSelect = `${optionSelect}
                                              <option value="1">Activo</option>
                                              <option value="2">Inactivo</option>
                                            `;
                            document.querySelector("#listStatus").innerHTML = htmlSelect;
                            $('#modalFormRol').modal('show');
                        }else{
                            swal("Error", objData.msg , "error");
                        }
                    }
                }
                
            });
        });
    }
    
    function fntDelRol(){
        var btnDelRol = document.querySelectorAll(".btnDelRol");
        btnDelRol.forEach(function(btnDelRol) {
            btnDelRol.addEventListener('click', function(){
                var idrol = this.getAttribute("rl");
                swal({
                    title: "Eliminar Rol",
                    text: "¿Realmente quiere eliminar el Rol?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Si, eliminar!",
                    cancelButtonText: "No, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: true
                }, function(isConfirm) {
                    
                    if (isConfirm) 
                    {
                        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                        var ajaxUrl = base_url+'/Roles/delRol/';
                        var strData = "idrol="+idrol;
                        request.open("POST",ajaxUrl,true);
                        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        request.send(strData);
                        request.onreadystatechange = function(){
                            if(request.readyState == 4 && request.status == 200){
                                var objData = JSON.parse(request.responseText);
                                if(objData.status)
                                {
                                    swal("Eliminar!", objData.msg , "success");
                                    tableRoles.api().ajax.reload(function(){
                                        fntEditRol();
                                        fntDelRol();
                                        fntPermisos();
                                    });
                                }else{
                                    swal("Atención!", objData.msg , "error");
                                }
                            }
                        }
                    }
    
                });
    
            });
        });
    }
    



});


function openModal(){
/*
    document.querySelector('#idRol').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector("#formRol").reset();
	*/
	$('#modalFormRol').modal('show');
}





