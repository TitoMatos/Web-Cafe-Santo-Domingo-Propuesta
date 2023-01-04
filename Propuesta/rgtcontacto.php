<?php
include_once('header.php');
?>




				<!-- Section -->
				<section>
					<header class="">
						<h1 id="marron">CONTACTO</h1>
					</header>


					<hr class="major" />


					<?php
                            if ($_POST) {

                                //Recibimsos los datos´

                                $Nombre = $_POST['txtNombre'];
                                $Correo = $_POST['txtCorreo'];
                                $Tema = $_POST['txtTema'];
                                $Mensaje = $_POST['txtMensaje'];

                                //Validamos los dato

                                if (empty($Nombre)) {
                                    echo '<h5>Debe introducir el su nombre.</h5>';
                                }

                                if (empty($Correo)) {
                                    echo '<h5>Debe introducir su correo.</h5>';
                                }

                                if (empty($Tema)) {
                                    echo '<h5>Debe seleccionar el tema del mensaje.</h5>';
                                } 

                                if (empty($Mensaje)) {
                                    echo '<h5>Debe escribir su mensaje.</h5>';
                                }

                                if ((!empty($Nombre)) && (!empty($Correo)) && (!empty($Tema)) && (!empty($Mensaje))) {
 
                                    //Nos conectamos al servidor

                                    $Servidor = "localhost";
                                    $Usuario = "root";
                                    $Clave = "";
                                    $DB = "db_cafe_santo_domingo";

                                    $cont = mysqli_connect($Servidor, $Usuario, $Clave, $DB)  or die('Error con la base de datos');

                                    // Preparamos la sentencia SQL para guardar

                                    $guardar = "
                                 insert into mensajes (nombre, correo, tema, mensaje)
                                 value ('$Nombre', '$Correo', '$Tema', '$Mensaje')
                                ";

                                    if (mysqli_query($cont, $guardar)) {

                                        echo '<h1>Su mensaje se ha enviado.</h1>';
                                        echo '<ul class="actions">
                                        <li><a href="contacto.php" class="button">Enviar otro mensaje</a></li>
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