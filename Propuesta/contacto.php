<?php
include_once('header.php');
?>




				<!-- Section -->
				<section>
					<header class="">
						<h2 id="rojo">INFORMACIÓN DE </h2>
						<h1 id="marron">CONTACTO</h1>
					</header>


					<hr class="major" />



					<!-- Lists -->
					<div class="row">
						<div class="col-6 col-12-small">

							<ul class="contact">
								<li class="icon solid fa-phone">Teléfono | 809-565-3121</li>
								<li class="icon solid fa-fax">Fax | 809-541-5465</li>
								<li class="icon solid fa-envelope"><a href="mailto:info@induban.com"> Correo |
										info@induban.com</a></li>
								<li class="icon solid fa-home">Dirección | Av. Máximo Gómez No.118, La Fe, Santo Domingo
									D.N</li>
							</ul>

						</div>

					</div>





					<hr class="major" />





					<!-- Form -->
					<h3>Envíanos un Mensaje</h3>

					<form action="rgtcontacto.php" method="post" name="contacto">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall">
								<input type="text" name="txtNombre" id="demo-name" value="" placeholder="Nombre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="txtCorreo" id="demo-email" value="" placeholder="Correo" />
							</div>
							<!-- Break -->
							<div class="col-12">
								<select name="txtTema" id="demo-category" placeholder="Correo">
									<option value="">- Tema del Mensaje -</option>
									<option value="1">Productos</option>
									<option value="1">Locales</option>
									<option value="1">Envíos</option>
									<option value="1">Quejas</option>
								</select>
							</div>

 
							<!-- Break -->
							<div class="col-12">
								<textarea name="txtMensaje" id="demo-message" placeholder="Escribe tu mensaje..."
									rows="6"></textarea>
							</div>
							<!-- Break -->
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
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