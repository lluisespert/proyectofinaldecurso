<?php


if(isset($_POST['email2']) && isset($_POST['texto2']) && isset($_POST['nombre2']) && isset($_POST['listacursos'])){

    $email=$_POST['email2'];

    $texto=$_POST['texto2'];

    $nombre=$_POST['nombre2'];

    $curso=$_POST['listacursos'];

    $to = "emailconsultas@solucionesespert.es";

    $subject = "Consulta sobre el curso";

    $txt = $texto;

    $cabecera = "From : ".$email." Nombre del curso:  ".$curso."Nombre del usuario : "."\r\n";

    mail($to, $subject, $txt, $cabecera);

}

if(isset($_POST['email2']) && isset($_POST['texto2']) && isset($_POST['nombre2']) && isset($_POST['listacursos'])){


    $email=$_POST['email2'];

    $texto=$_POST['texto2'];

    $nombre=$_POST['nombre2'];

    $curso=$_POST['listacursos'];

    try{

        $db = new PDO('mysql:host=localhost:3306; dbname=base_de_datos', 'superlewis', 'andillaa1b2c3d4');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec('SET CHARACTER SET UTF8');

        $consulta  = $db -> prepare ("INSERT INTO dudas (id2, nombre, email, curso, consulta) VALUES (null, '$nombre', '$email', '$curso', '$texto')");
        
        $consulta -> execute();

        $db = null;

    } catch (PDOException $e){

        die('Error en línea '.$e->getMessage());

    }

}


?>