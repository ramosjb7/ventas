

<div class="row">

	<div class="col-12 col-sm-6 col-lg-3">

		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
				<?php 
					$tabla = "habitacion";
					echo $stmt = Conexion::conectar()->query("SELECT * FROM $tabla")->rowCount();
                 
            	?>	

				</h3>

				<p >TOTAL HABITACIONES</p>
			</div>
			<div class="icon">
				<i class="fas fa-bed"></i>
			</div>
			<a href="ingresos-uninivel" class="small-box-footer">
			
			<i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->

	<div class="col-12 col-sm-6 col-lg-3">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3>
				<?php 
					$tabla1 = "habitacion";
					$id = "id_estado_habitacion";
					echo $stmt = Conexion::conectar()->query("SELECT * FROM $tabla WHERE id_estado_habitacion = '1' ")->rowCount();
                 
            	?>	
				</h3>

				<p>HABITACIONES LIBRES</p>
			</div>
			<div class="icon">
				<i class="fas fa-door-open"></i>
			</div>
			<a href="uninivel" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->

	<div class="col-12 col-sm-6 col-lg-3">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>
				<?php 
					$tabla1 = "habitacion";
					$id = "id_estado_habitacion";
					echo $stmt = Conexion::conectar()->query("SELECT * FROM $tabla WHERE id_estado_habitacion = '2' ")->rowCount();
                 
            	?>	

				</h3>

				<p>HABITACIONES OCUPADAS</p>
			</div>
			<div class="icon">
				<i class="fas fa-clock"></i>
			</div>
			<a href="soporte" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->

	<div class="col-12 col-sm-6 col-lg-3">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>

				<?php 
					$tabla1 = "habitacion";
					$id = "id_estado_habitacion";
					echo $stmt = Conexion::conectar()->query("SELECT * FROM $tabla WHERE id_estado_habitacion = '3' ")->rowCount();
                 
            	?>	
				</h3>

				<p>HABITACIONES EN LIMPIEZA</p>
			</div>
			<div class="icon">
				<i class="fas fa-broom"></i>
			</div>
			<a href="perfil" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->

</div>