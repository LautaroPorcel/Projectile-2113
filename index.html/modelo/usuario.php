<?php

function insertar($nom, $tel, $corr)
{

        $Conexion = include("conexion.php");

        $cadena = "INSERT INTO dueño(Nombre, Telefono, Correo) VALUES ('$nom','$tel','$corr')";

        try {
            $resultado = mysqli_query($Conexion, $cadena);

            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
        }


    }
    
    ?>