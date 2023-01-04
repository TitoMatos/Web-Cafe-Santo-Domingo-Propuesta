<?php
include_once('header.php');
?>



				<!-- Section -->
				<section>
					<header class="">
						<h1 id="marron">SUSCRÍBETE</h1>
						<h3>Completa el formulario y recibe las ultimas novedades a tu correo electrónico.</h3>
					</header>


					
 

					<!-- Form -->
					

					<form action="rgtsuscribete.php" method="post" name="contacto">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall">
								<input type="text" name="txtNombre" id="demo-name" value="" placeholder="Nombre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="txtCorreo" id="demo-email" value="" placeholder="Correo" />
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="text" name="txtTelefono" id="demo-phone" value="" placeholder="Telefono" />
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="text" name="txtDireccion" id="demo-email" value="" placeholder="Dirección" />
							</div>
							


							
							<!-- Break -->
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Suscribírse" class="primary" /></li>
									<li><input type="reset" value="Limpiar" /></li>
								</ul>
							</div>
						</div>
					</form>

					


				</section>

			</div>
		</div>

		<?php
		include_once('footer.php');
		?>