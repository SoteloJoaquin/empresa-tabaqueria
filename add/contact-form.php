<?php
$conex_bd = mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd") or exit ('No se puede conectar con la Base de Datos');
$Name = $_POST["name"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$Subject = $_POST["subject"];
$Message = $_POST["message"];
mysqli_query($conex_bd, "INSERT INTO contacto VALUES (DEFAULT, '$Name', '$Email', '$Phone', '$Subject', '$Message')");
mysqli_close($conex_bd);
header('Location: ../contact-us.php?ok');
?>
