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
use core\controllers\ControllerFactory;
use core\controllers\BaseController;

/**
 * Including files
 */
//require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';

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
$contrlfactoryobj= new ControllerFactory;
if(isset($_REQUEST['crud'])||isset($_REQUEST['buttonchoice']))
{
    if(isset($_REQUEST['crud']))
    {
        
        $req=new Request($_REQUEST['crud'],$_REQUEST['modelname']);//object of request class setting values of operation and buttonvalue
        $crudvalue=$req->crud;
        
        $contrlfactory=$contrlfactoryobj->createController($req->table);//making object of specific controller
        if(isset($contrlfactory))
        {
            $contrlfactory->operation($req->crud,$req->table);//calling operation which will call related view file
        }
        if(isset($_REQUEST['parameter']))
        {
            $req->parameters=$_REQUEST['parameter'];
            $obj= new BaseController("$req->table");
            $obj->$crudvalue($req->table,$req->parameters);//basecontroller object calling generic fucntions according $crud value

        }
    }
    if(isset($_REQUEST['buttonchoice']))
    {
        $buttonvalue=$_REQUEST['buttonchoice'];
        $contrlfactory=$contrlfactoryobj->createController("default");//making default controller object
        $contrlfactory->call("default",$buttonvalue);
    }
}
else
{
    $contrlfactory=$contrlfactoryobj->createController("home");//making home controller object
    $contrlfactory->call("home");
}
//$req=new Request($crudvalue,$buttonvalue);//object of request class setting values of operation and buttonvalue
?>