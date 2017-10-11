<html>
    <head>
        <title>Practica 12-Variables PHP</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        $nombre='Victoria';
        $edad=20;
        $salario=100.00;
        $status=true;
        echo "Valores</br>";
        echo "Nombre:".$nombre.'</br>';
        echo "Edad:".$edad.'</br>';
        echo "Salario:".$salario.'</br>';
        echo  "Status:".$status.'</br>';
        ?>
        <h1> OPERACIONES ARITMETICAS </h1>
        <?php
        echo "<h1> OPERACIONES ARITMETICAS </h1>";
        $valor1=15;
        $valor2=7;
        $suma=$valor1+$valor2;
        echo "La suma es:".$suma.'</br>';

        $resta=$valor1-$valor2;
        echo "La resta es:".$resta.'</br>';

        $multiplicacion=$valor1*$valor2;
        echo "La multiplicacion es:".$multiplicacion.'</br>';

        $division=$valor1/$valor2;
        echo "La division es:".$division.'</br>';
        ?>
    </body>
</html>