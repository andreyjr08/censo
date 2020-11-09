<?php
 use clases_pdo\funcionLog;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../funciones/login.php');

        $resu = array();
        $usuario = $_POST['usuario'];
        $contra =  $_POST['contra'];

        $ins = new funcionLog();
        $result = $ins->log($usuario,$contra);

        if($result) {
                $code = json_encode($result);
                $decode=json_decode($code, true);

                $nombre= $decode['usuario'];
                $email= $decode['email'];

                session_start();
                $_SESSION['usuario'] =$nombre;
                $_SESSION['email'] =$email;
                
                var_dump($nombre);
                $resu["msj"] = header('Location: ../html/exito.php');
                
            } else {
                $resu["res"] = "no";
                $resu["msj"] = header('Location: ../html/index.php');
            }

            return json_encode($resu);
        }
?>