<div class="ladoUsuarios">

	<div class="container-fluid">
		
		<div class="row justify-content-center">
			
			<div class="col-12 col-lg-4">

				<figure class="p-2 p-sm-5 p-lg-2 p-xl-3 text-center">
				
					<a href="<?php echo $ruta; ?>inicio"><img src="img/logo3.png" class="img-fluid px-5 height="250px" width="300px"></a>

					<div class="d-flex justify-content-between">
					
						

						<div class="dropdown text-right">

							<button type="button" class="btn btn-light btn-sm dropdown-toggle pr-3" data-toggle="dropdown">
								<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
										
										<input type="hidden" name="idioma" value="en">
										<input type="submit" value="EN" style="border: 0;
																			    background: transparent;
																			    padding: 0;
																			    margin: 0;
																			    float: left;
																			    cursor: pointer;">



								</form>
							</button>

							<div class="dropdown-menu">

								<a class="dropdown-item" href="#">
									
									<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
									
										<input type="hidden" name="idioma" value="es">
										<input type="submit" value="ES" style="border: 0;
																			    background: transparent;
																			    padding: 0;
																			    margin: 0;
																			    cursor: pointer;">



									</form>

								</a>

							</div>

						</div>

					</div>

					<form method="post" class="mt-3 px-4" onsubmit="return validarPoliticas()">

					<h4>Sign up to the system</h4>

						<input type="text" class="form-control my-3 py-3" placeholder="Name" name="registroNombre" required>

						<input type="email" class="form-control my-3 py-3" placeholder="Email" name="registroEmail" required>

						<input type="password" class="form-control my-3 py-3" placeholder="Password" name="registroPassword" required>

						<div class="form-check-inline text-right">
							
							<input type="checkbox" id="politicas" class="form-check-input">

								<label class="form-check-label" for="politicas">
							To register you must accept the terms and conditions<span></span>
							</label>

						</div>

						<?php 

							$registro = new ControladorUsuarios();
							$registro -> ctrRegistroUsuario();

						?>

						<input type="submit" class="form-control my-3 py-3 btn btn-info" value="Sign up">

						<p class="text-center py-3">Do you already have an account? | <a href="<?php echo $ruta; ?>ingreso">Login</a></p>

					</form>

				</figure>

			</div>

			<div class="container">		

				<a href="<?php echo $ruta; ?>inicio"><button class="d-none d-lg-block text-center btn btn-default btn-lg my-3 text-black btnRegresar">BACK</button></a>

				<a href="<?php echo $ruta; ?>inicio"><button class="d-block d-lg-none text-center btn btn-default btn-lg btn-block my-3 text-black btnRegresarMovil">BACK</button></a>

				
			</div>

		</div>

	</div>

</div>