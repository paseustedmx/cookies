<?php 

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $submit = $_POST['submit'];

    $mailTo = "hola@paseusted.com.mx";
    $headers = "De: ".$email ;
    $txt = "hemos recibido un email de: ".$name.".\n\n";
    $phone = "Mi numero es: ".$number. "y mi correo es: ".$email;
    $mensaje = "mi mensaje es: ".$message;
    mail($mailTo,$txt, $phone, $mensaje);
    
}
header("Location: index.html?mailsend");


?>
