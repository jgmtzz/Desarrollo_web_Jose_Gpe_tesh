<html>
<?php include 'plantillas/header.php'; ?>
	</div>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>CONSULTORIOS</h2>
					</div>
						<a class="agregar" href="agregarconsultorios.php">Agregar Consultorio</a>
						<table class="tabla">
						  <tr>
							<th>#</th>
							<th>Nombre</th> 
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