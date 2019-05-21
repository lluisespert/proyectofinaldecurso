<?php

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

try{

    $db = new PDO('mysql:host=localhost:3306; dbname=base_de_datos', 'superlewis', 'andillaa1b2c3d4');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec('SET CHARACTER SET UTF8');

    $consulta  = $db -> prepare ("SELECT recurso FROM recursos");
    
    $consulta -> execute();

    $db = null;

    foreach(new TableRows(new RecursiveArrayIterator($consulta->fetchAll())) as $k=>$v) { 
        echo $v."<br>"."<br>";
    }

} catch (PDOException $e){

    die('Error en línea '.$e->getMessage());

}

?>