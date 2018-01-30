<?php
// the message
$msg = $_POST["text"];
$email = $_POST["email"];
$name = $_POST["name"];

var_dump($_POST);

if ( !$msg || !$email || !$name) {
    header("Location: ./?message=" . rawUrlEncode("Debe completar todos los datos") . "&result=error");
    die();
}

// send email
mail("elgatogabriel@gmail.com", "[Grupo Caserga Formulario Web] " . $name, "Mensaje de " . $email . ":\n\n" . $msg);
mail("caserga2003@yahoo.com.ar", "[Grupo Caserga Formulario Web] " . $name, "Mensaje de " . $email . ":\n\n" . $msg);
mail($email, "[Copia] Mensaje envaido a Grupo Caserga", "Gracias por comunicarse con Grupo Caserga. Su mensaje será respondido a la brevedad:\n\n" . $msg);
header("Location: ./?message=" . rawUrlEncode("Mensaje enviado con éxito") . "&result=success");
    die();
?>