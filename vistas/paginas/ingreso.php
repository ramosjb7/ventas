<div class="ladoUsuarios">

	<div class="container-fluid">
		
		<div class="row justify-content-center">
			
			<div class="col-12 col-lg-4 formulario">

				<figure class="p-2 p-sm-5 p-lg-4 p-xl-5 text-center">
				
					<a href="<?php echo $ruta; ?>inicio"><img src="img/logo3.png" class="img-fluid" height="150px" width="200px"></a>

					<div class="d-flex justify-content-between">
					
						
						

						<div class="dropdown text-right">

							<button type="button" class="btn btn-light btn-sm dropdown-toggle pr-3" data-toggle="dropdown">
								<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
									
									<input type="hidden" name="idioma" value="es">
									<input type="submit" value="ES" style="border: 0;
																		    background: transparent;
																		    padding: 0;
																		    margin: 0;
																		    float: left;
																		    cursor: pointer;">



								</form>
							</button>

							<div class="dropdown-menu">

								<a class="dropdown-item">
									
									<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
									
										<input type="hidden" name="idioma" value="en">
										<input type="submit" value="EN" style="border: 0;
																			    background: transparent;
																			    padding: 0;
																			    margin: 0;
																			    cursor: pointer;">



									</form>

								</a>

							</div>

						</div>

					</div>

					<form method="post" class="mt-5">

					<strong><h4 class="text-center fs-1">Ingreso al sistema</h4></strong>

						<input type="email" class="form-control my-3 py-3" placeholder="Correo Electrónico" name="ingresoEmail" required>

						<input type="password" class="form-control my-3 py-3" placeholder="Contraseña" name="ingresoPassword" required>

						<?php 

							$ingreso = new ControladorUsuarios();
							$ingreso -> ctrIngresoUsuario();

						?>

						<input type="submit" class="form-control my-3 py-3 btn btn-info" value="Ingresar">

						<p class="text-center pt-1">¿Aún no tienes una cuenta? | <a href="<?php echo $ruta; ?>registro">Regístrate</a></p>

						<p class="text-center pt-1"><a href="#modalRecuperarPassword" data-toggle="modal" data-dismiss="modal">¿Olvidó su contraseña?</a></p>

					</form>

				</figure>

			</div>

			<div class="container">		

				<a href="<?php echo $ruta; ?>inicio"><button class="d-none d-lg-block text-center btn btn-default btn-lg my-3 text-black btnRegresar">REGRESAR</button></a>

				<a href="<?php echo $ruta; ?>inicio"><button class="d-block d-lg-none text-center btn btn-default btn-lg btn-block my-3 text-black btnRegresarMovil">REGRESAR</button></a>

				
			</div>

		</div>

	</div>

</div>

<!--=====================================
VENTANA MODAL RECUPERAR CONTRASEÑA
======================================-->

<div class="modal" id="modalRecuperarPassword">
	
	<div class="modal-dialog">

	    <div class="modal-content">

	    	<div class="modal-header bg-info text-white">

		        <h4 class="modal-title">Recuperar contraseña</h4>

		        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>

		    </div>

			 <div class="modal-body">
			 	
				<form method="post">

					<p class="text-muted">Escriba su correo electrónico con el que está registrado y allí le enviaremos una nueva contraseña:</p>

					<div class="input-group mb-3">
						
						<div class="input-group-prepend">

					      <span class="input-group-text">
					      	
					      	<i class="far fa-envelope"></i>

					      </span>

					    </div>

					    <input type="email" class="form-control" placeholder="Email" name="emailRecuperarPassword" required>

					</div>

					<input type="submit" class="btn btn-dark btn-block" value="Enviar">

					<?php

						$recuperarPassword = new ControladorUsuarios();
						$recuperarPassword -> ctrRecuperarPassword();

					?>

				</form>

			 </div>

	    </div>

    </div>

</div>