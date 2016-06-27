<?php
/**
 * Index file calling default.php
 */
define("Root",dirname(dirname(__FILE__)));
define("d_S",DIRECTORY_SEPARATOR);
/**
 * Including files
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';


require_once Root.d_S.'core'.d_S.'controllers'.d_S.'controllerInterface.php';
require_once Root.d_S.'core'.d_S.'controllers'.d_S.'baseController.php';
require_once Root.d_S.'app'.d_S.'controllers'.d_S.'courseController.php';
require_once Root.d_S.'app'.d_S.'controllers'.d_S.'teacherController.php';
require_once Root.d_S.'app'.d_S.'controllers'.d_S.'studentController.php';
require_once Root.d_S.'core'.d_S.'controllers'.d_S.'controllerFactory.php';
require_once Root.d_S.'core'.d_S.'models'.d_S.'modelInterface.php';
require_once Root.d_S.'core'.d_S.'models'.d_S.'baseModel.php';
require_once Root.d_S.'core'.d_S.'models'.d_S.'database'.d_S.'database.php';
require_once Root.d_S.'app'.d_S.'models'.d_S.'course.php';
require_once Root.d_S.'app'.d_S.'models'.d_S.'teacher.php';
require_once Root.d_S.'app'.d_S.'models'.d_S.'student.php';
require_once Root.d_S.'core'.d_S.'models'.d_S.'modelFactory.php';
require_once Root.d_S.'core'.d_S.'util'.d_S.'request.php';

//require_once Root.d_S.'app'.d_S.'views'.d_S.'teacher'.d_S.'list.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'teacher'.d_S.'edit.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'teacher'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'list.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'edit.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'student'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'list.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'edit.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'course'.d_S.'delete.php';
//require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.'add.php';

$req=new request($crudvalue,$buttonvalue);

if(isset($_POST['parameter']))
{
    $req->wrappper();
}
?>