<html>
<?php include 'plantillas/header.php'; ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>CITAS</h2>
					</div>
					<a class="agregar" href="agregarcitas.php">Agregar Citas</a>
					<table class="tabla">
						  <tr>
							<th>#</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Paciente</th>
							<th>Medico</th>
							<th>Consultorio</th>
							<th>Estado</th>
							<th colspan="2">Opciones</th>
						  </tr>
						
						</table>
						<?php  if(!empty($mensaje)): ?>
							<ul>
							  <?php echo $mensaje; ?>
							</ul>
						<?php  endif; ?>	 
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>