<?php

class request
{
    public $crud;
    public $table;
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
}