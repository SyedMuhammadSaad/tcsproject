<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * Index file calling default.php
         */
        define('Root_dir',__DIR__);
        
        /**
         * Including files
         */
        if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }
        $str=Root_dir;
        $str=  rtrim($str,'\public');
        $_SESSION['Root']=$str;
        
        include_once $_SESSION['Root'].'/app/views/layouts/default.php';
        ?>
    </body>
</html>
