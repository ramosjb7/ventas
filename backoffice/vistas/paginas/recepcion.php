<?php
/*
$link = new PDO("mysql:host=localhost;dbname=bd_hotel","root","");
$link->exec("set names utf8");


  if(isset($POST['txtNumeroHabitacion'])){
    echo 'entraste al if***********';
    $numero = $_POST['txtNumeroHabitacion'];
    $detalle = $_POST['txtDescripcion'];
    $precio = $_POST['textPrecioNoche'];
    $id_estado = 1;
    $id_piso = 1;
    $id_categoria = 2;


    $insertar = $link->prepare("INSERT INTO habitacion(numero, detalle,precio,id_estado_habitacion,id_piso,id_categoria) VALUES ($numero, $detalle, $precio, $id_estado, $id_piso, $id_categoria)");

    if($insertar->execute()){
			return 'ok';
		}else{
			return print_r($link->errorInfo());
		}
		$insertar = null;


  }
  */
?>

<div class="content-wrapper" style="min-height: 1604.62px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Recepcion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Recepcion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <div class="col-lg-12">            
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormRol">
            <i class="fas fa-plus-circle"> Nuevo</i></button>    
        </div>    
    

    <!-- Main content -->
    <section class="content">
              
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
                <table class="table table-striped table-bordered dt-responsive tablaHabitaciones" width="100% ">
            <thead>
              <tr>
                <th>#</th>
                <th>Detalle</th>
                <th>Numero</th>
                <th>Precio</th>
                <th>Piso</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">AGREGAR HABITACION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="tile">
                    <div class="tile-body">
                      <form id="formRol" name="formRol" method="post">
                        <input type="hidden" id="idRol" name="idRol" value="">
                        <div class="form-group">
                          <label class="control-label">Numero habitacion</label>
                          <input class="form-control" id="txtNumeroHabitacion" name="txtNumeroHabitacion" type="number" placeholder="Numero de habitacion" required="">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Descripción</label>
                          <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción de habitacion" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Precio por noche</label>
                            <input type="number" class="form-control" id="txtPrecioNoche" placeholder="Precio por Noche" name="txtPrecioNoche"  required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Estado Habitacion</label>
                            <select class="form-select form-control custom-select rounded-0" placeholder="Estado Habitacion"  name="txtEstadoHabitacion"  id="txtEstadoHabitacion" required="">
                              <option>Seleccionar</option>
                              <option>Libre</option>
                              <option>Ocupada</option>
                              <option>Limpieza</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Categoria</label>
                            <select class="form-select form-control custom-select rounded-0" placeholder="Categoria habitacion"   name="txtCategoriaHabitacion" id="txtCategoriaHabitacion" required="">
                              <option>Seleccionar</option>
                              <option>Matrimonial</option>
                              <option>Doble</option>
                              <option>Individual</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Piso</label>
                          <input class="form-control" id="txtNumeroPiso" name="txtNumeroPiso" type="number" placeholder="Numero de piso" required="">
                        </div>
                        

                        <div class="tile-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="" data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                       </div>
                        
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>