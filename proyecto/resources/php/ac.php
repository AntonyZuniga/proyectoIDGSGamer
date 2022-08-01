<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['message']) >= 1) {
	    $email = trim($_POST['email']);
	    $message = trim($_POST['message']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO ac(Correo, Texto, Fecha_Reg) VALUES ('$email','$message','$fechareg')";
	    $resultado = mysqli_query($DBC,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h5 class="ok">¡Mensaje enviado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h5 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h5 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
