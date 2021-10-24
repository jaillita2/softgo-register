<?php
    if(isset($_POST['submit'])){
        if(empty($user_name)){
            echo "<p class='error'>* Agrega tu nombre de usuario </p";
            if(strlen($user_name) > 30){
                echo "<p class='error'>* el  nombre de usuario es muy largo </p";
            }
        }
        if(empty($id_user)){
            echo "<p class='error'>* Agrega tu codigosis </p";
            if(!is_numeric($id_user) > 9){
                echo "<p class='error'>* el codigo sis es incorrecto </p";
            }
        }
        if(empty($paswd_user)){
            echo "<p class='error'>* Agrega tu contraceña </p";
        }
        if(empty($email)){
            echo "<p class='error'>* Agrega tu email </p";
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* el correo es incorrecto </p";
            }
        }
        if(empty($last_name)){
            echo "<p class='error'>* Agrega tus apellidos </p";
            if(strlen($last_name) > 30){
                echo "<p class='error'>* el  apellido es muy largo </p";
            }
        }
        if(empty($name)){
            echo "<p class='error'>* Agrega tu nombre </p";
            if(strlen($name) > 20){
                echo "<p class='error'>* el  nombre  es muy largo </p";
            }
        }
    }
?>
