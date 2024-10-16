<?php

// Variables para los meta
$author = "Pedro Pérez";
$title = "checkdata";

//inicio sesión
session_start();

//Paso datos importados a un array
$provider = $_SESSION['provider'];

//importo cabecera
require_once __DIR__ . "/html/head.php";

//Compruebo si llegan datos desde el formulario y si es correcto los muestro
if (isset($_SESSION['provider'])) {

    echo "<H1>No errors!</H1>";

    echo "<p>id: " . $provider['id'] . "</p>";
    echo "<p>title: " . $provider['title'] . "</p>";
    echo "<p>name: " . $provider['name'] . "</p>";
    echo "<p>surname: " . $provider['surname'] . "</p>";
    echo "<p>birthdate: " . $provider['birthdate'] . "</p>";
    echo "<p>phone: " . $provider['phone'] . "</p>";
    echo "<p>email: " . $provider['email'] . "</p>";
    echo "<p>favourite: " . $provider['favourite'] . "</p>";
    echo "<p>important: " . $provider['important'] . "</p>";
    echo "<p>archived: " . $provider['archived'] . "</p>";


} else {
    echo "<H1>No provider data</H1>";
}

?>

    <a class="btn btn-secondary" href="contact_list.php">Data table</a>

<?php

//Importo el footer
require_once __DIR__ . "/html/footer.php";

