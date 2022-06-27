<?php
/* Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// Check name
if (isset($_GET['name'])){
if (strlen($name) > 3) {
    $message = "<p><strong>Nome:</strong> $name</p>";
} else {
    $message = "Il nome inserito deve essere maggiore di 3 caratteri";
}
}

// Check email
if (isset($_GET['mail'])) {

$position_chiocciola = strpos($mail, '@');

if ($position_chiocciola != false && strpos($mail, '.',            $position_chiocciola) != false) {
    $result = "<p><strong>E-mail:</strong> $mail</p>";
} else {
    $result = "<p>E-mail non valida</p>";
}
}

// Check Age
if(isset($_GET['age'])){
if (is_numeric($_GET['age'])) {
    $number = "<p><strong>Age:</strong> $age</p>";
} else {
    $number = "Non hai inserito numeri";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h2>Controllo dati</h2>
    <form action="" method="get">
        <label for="name">Inserisci nome</label>
        <input type="text" name="name" id="name">
    </form>
    <div><?= $message; ?></div>

    
        <br>
    <form action="" method="get">
        <label for="mail">Inserisci email</label>
        <input type="text" name="mail" id="mail">
    </form>
    <div><?= $result; ?></div>


    <br>
    <form action="" method="get">
        <label for="age">Inserisci etá</label>
        <input type="text" name="age" id="age">
    </form>
    <div><?= $number; ?></div>



</body>

</html>