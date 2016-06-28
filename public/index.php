<?php
/**
 * Index file calling default.php
 */
define("Root",dirname(dirname(__FILE__)));
define("d_S",DIRECTORY_SEPARATOR);

use core\util\request;//using namespace from request.php
/**
 * Including files
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';

/**
 * AutoLoad function getting name of class to autoload
 * @param string $class_name
 */
function __autoload($class_name)
{
    // replace namespace separator with directory separator
        $className = str_replace('\\', d_S, $class_name);

    // get full name of file containing the required class
        $file = Root.d_S."$className.php";

    // get file if it is readable
        if (is_readable($file)) 
        {
            require_once $file;
        }
}

$req=new Request($crudvalue,$buttonvalue);//object of request class setting values of operation and buttonvalue

if(isset($_POST['parameter']))
{
    $req->wrappper();//calling wrapper function 
}
?>