
 
<?php
/*if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $header = "From:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "Reply-To:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "X-Mailer:PHP/". phpversion();
        $email = @mail($email,$nombre,$header);
        if ($mail) {
            echo "<h4> ¡Mail enviado con  exito!";
        }

    }
}*/



$nombre = $_POST['nombre'];
$email = $_POST['email'];
echo "<h1>Esto es PHP</h1>";
echo "Mi nombre es: <b> " . $nombre . "</b><br>";
echo "Mi email es:<b>" . $email . "</b>";


?>

