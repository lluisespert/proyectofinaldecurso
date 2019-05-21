<?php


if(isset($_POST['email']) && isset($_POST['texto'])){

    $email=$_POST['email'];

    $texto=$_POST['texto'];

    $to = "emailconsultas@solucionesespert.es";

    $subject = "Consulta";

    $txt = $texto;

    $cabecera = "From :".$email." "."\r\n";

    mail($to, $subject, $txt, $cabecera);

}

if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['texto'])){

    $nom = $_POST['nombre'];

    $email=$_POST['email'];

    $texto=$_POST['texto'];

    try{

        $db = new PDO('mysql:host=localhost:3306; dbname=base_de_datos', 'superlewis', 'andillaa1b2c3d4');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec('SET CHARACTER SET UTF8');

        $consulta  = $db -> prepare ("INSERT INTO consultas (id, nombre, email, consulta) VALUES (null, '$nom', '$email', '$texto')");
        
        $consulta -> execute();

        $db = null;

    } catch (PDOException $e){

        die('Error en línea '.$e->getMessage());

    }

}


?>