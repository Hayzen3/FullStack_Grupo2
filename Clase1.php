<?php
    echo "<h1> una forma de escribir (html) </h1>";
    print "Otra froma de escribir </br>";
    print ("otra forma </br>");
    print_r("otra forma </br>"); //Arreglos
    var_dump("otra forma </br>");
    //Consultas de bases de datos
    //Generar Info detallada 
    //Cuando estamos probando codigo
    echo '</br>';


    //Variables    v 
    $texto = "Texto"; 
    $entero = 10;
    $real = 3.1416;
    $bool = true;

    //Ejemplo
    $nombre = "Edward";
    $edad = 20;
    $estatura = 1.86;
    $enLinea = true;

    echo "Mi nombre es ",$nombre, '</br>';
    echo "Mi edad es ",$edad, "</br>";
    var_dump("Mido ",$estatura, '</br>');
    echo '</br>';

    if ($entero == 10)
    {
        echo 'Muy Bien';
    }
    else
    {
        echo 'Muy mal';
    }
    echo '</br>';

    $i=0;

    while($i<10)//mientras
    {
        echo $i, '</br>';
        $i++; //$i=$i+1
        $i+=2; //$i=$i+2
    }
    echo '<h2> Constantes </h2>';

    const constante = 'Valor Constante';
    echo constante;
    //constante= 'Otro Texto';

?>