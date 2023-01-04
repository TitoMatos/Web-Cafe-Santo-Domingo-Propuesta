<?php
include_once('header.php');
?>




				<!-- Section -->
				<section>
					<header class="">
						<h1 id="marron">SUSCRIBIRSE</h1>
					</header>


					<hr class="major" />





					<?php
                            if ($_POST) {

                                //Recibimsos los datos´

                                $Nombre = $_POST['txtNombre'];
                                $Correo = $_POST['txtCorreo'];
                                $Telefono = $_POST['txtTelefono'];
                                $Direccion = $_POST['txtDireccion'];

                                //Validamos los dato

                                if (empty($Nombre)) {
                                    echo '<h5>Debe introducir el su nombre.</h5>';
                                }

                                if (empty($Correo)) {
                                    echo '<h5>Debe introducir su correo.</h5>';
                                }

                                if (empty($Telefono)) {
                                    echo '<h5>Debe introducir su teléfono.</h5>';
                                } 

                                if (empty($Direccion)) {
                                    echo '<h5>Debe introducir su dirección.</h5>';
                                }

                                if ((!empty($Nombre)) && (!empty($Correo)) && (!empty($Telefono)) && (!empty($Direccion))) {

                                    //Nos conectamos al servidor

                                    $Servidor = "localhost";
                                    $Usuario = "root";
                                    $Clave = "";
                                    $DB = "db_cafe_santo_domingo";

                                    $cont = mysqli_connect($Servidor, $Usuario, $Clave, $DB)  or die('Error con la base de datos');

                                    // Preparamos la sentencia SQL para guardar

                                    $guardar = "
                                 insert into suscriptores (nombre, correo, telefono, direccion)
                                 value ('$Nombre', '$Correo', '$Telefono', '$Direccion')
                                ";

                                    if (mysqli_query($cont, $guardar)) {

                                        echo '<h1>Se ha suscrito.</h1>';
                                        echo '<ul class="actions">
                                        <li><a href="suscribete.php" class="button">Volver</a></li>
                                        </ul>';
                                    } else {

                                        echo '<h2>¡HA OCURRIDO UN ERROR!</h2>';
                                    }
                                }
                            }
                            ?>



				</section>

			</div>
		</div>


		<?php
		include_once('footer.php');
		?>