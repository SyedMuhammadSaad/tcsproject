<?php

namespace core\util;
use core\controllers\ControllerFactory;
use core\controllers\BaseController;
class request
{
    private $crud;
    private $table;
    public function __construct($crud,$table) 
    {
        $this->crud=$crud;
        $this->table=$table;
        $contrlfactoryobj= new ControllerFactory;
        $contrlfactory=$contrlfactoryobj->createController($this->table);
        if(isset($contrlfactory))
        {
            $contrlfactory->operation($crud,$table);
        }
    }
    public function wrappper()
    {
        $param=$_POST['parameter'];
        $modname=$_POST['modelname'];
        $crud=$_POST['crudname'];
        $obj= new BaseController("$modname");
        $obj->$crud($modname,$param);
    }
}