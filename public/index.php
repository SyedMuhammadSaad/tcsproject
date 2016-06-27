<?php
/**
 * Index file calling default.php
 */
define("Root",dirname(dirname(__FILE__)));
define("d_S",DIRECTORY_SEPARATOR);

use core\util\request;
/**
 * Including files
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';
//require_once Root.d_S.'core'.d_S.'controllers'.d_S.'controllerInterface.php';
//require_once Root.d_S.'core'.d_S.'controllers'.d_S.'baseController.php';
//require_once Root.d_S.'app'.d_S.'controllers'.d_S.'courseController.php';
//require_once Root.d_S.'app'.d_S.'controllers'.d_S.'teacherController.php';
//require_once Root.d_S.'app'.d_S.'controllers'.d_S.'studentController.php';
//require_once Root.d_S.'core'.d_S.'controllers'.d_S.'controllerFactory.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'modelInterface.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'baseModel.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'database'.d_S.'database.php';
//require_once Root.d_S.'app'.d_S.'models'.d_S.'course.php';
//require_once Root.d_S.'app'.d_S.'models'.d_S.'teacher.php';
//require_once Root.d_S.'app'.d_S.'models'.d_S.'student.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'modelFactory.php';

function __autoload($class_name)
{
    // replace namespace separator with directory separator (prolly not required)
        $className = str_replace('\\', d_S, $class_name);

    // get full name of file containing the required class
        $file = Root.d_S."$className.php";

    // get file if it is readable
        if (is_readable($file)) 
        {
            require_once $file;
        }
    //require_once Root.d_S.'core'.d_S.'util'.d_S.$class_name.'.php';
}

$req=new request($crudvalue,$buttonvalue);

if(isset($_POST['parameter']))
{
    $req->wrappper();
}
?>