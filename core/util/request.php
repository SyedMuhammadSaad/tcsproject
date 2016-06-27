<?php

class request
{
    private $crud;
    private $table;
    public function __construct($crud,$table) 
    {
        $this->crud=$crud;
        $this->table=$table;
        $contrlfactory= ControllerFactory::createController($this->table);
        if(isset($contrlfactory))
        {
            $contrlfactory->operation($crud);
        }
    }
    public function wrappper()
    {
        $param=$_POST['parameter'];
        $modname=$_POST['modelname'];
        $crud=$_POST['crudname'];
        $obj= new BaseController("$modname");
        $obj->$crud($param);
    }
}