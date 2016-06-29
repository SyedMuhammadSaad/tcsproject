<?php
/**
 * Index file calling default.php
 */
/**
 * Root directory defined
 */
define("Root",dirname(dirname(__FILE__)));
/**
 * Directory seperator defined
 */
define("d_S",DIRECTORY_SEPARATOR);

/**
 * Namespace used
 */
use core\util\Request;//using namespace from request.php
//Metadata Test require these files
//use app\models\metadata\MetaTeacher;
//use app\models\metadata\MetaStudent;
//use app\models\metadata\MetaCourse;
/**
 * Including files
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';
require_once Root.d_S.'app'.d_S.'config.php';
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
//Metadata Test
//$obj=new MetaTeacher;
//print_r($obj->metadata());

$req=new Request($crudvalue,$buttonvalue);//object of request class setting values of operation and buttonvalue

if(isset($_POST['parameter']))
{
    $req->wrappper();//calling wrapper function 
}
?>