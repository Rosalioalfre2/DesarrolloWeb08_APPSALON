<?php

function obtenerServicios() : array {
    try {
        //Importar una conexion
        require 'database.php';

        //Escribir el codigo SQL
        $sql = "SELECT * FROM `servicios`;";

        $consulta = mysqli_query($db, $sql);

        //Obtener los resultados
        //echo "<pre>";
        
        //Mostrar los resultados
        /*
        *Version 01
        //var_dump( mysqli_fetch_all($consulta) );
        var_dump( mysqli_fetch_assoc($consulta) );
        echo "</pre>";
        */

        /*Version 02*/

        //Areglo vacio
        $servicios = [];

        $i = 0; //*Contador

        while ( $row = mysqli_fetch_assoc( $consulta ) ){
            $servicios[$i]['id'] = $row ['id'];
            $servicios[$i]['nombre'] = $row ['nombre'];
            $servicios[$i]['precio'] = $row ['precio'];
            $servicios[$i]['fecha'] = $row ['fecha'];

            $i++;
        }

	    /*echo "<pre>";
        var_dump( $servicios );
        echo "</pre>"; */

        return $servicios;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}
