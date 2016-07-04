<?php
/**
 * ViewManager file calling respective views
 */
/**
 * Including header
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'header.php';
if(isset($opr))
{
    $modl=$this->model;
    if($opr=="add")//if add then calls the generic add view
    {
        require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.$opr.'.php';
    }
    else//else calls the respective views
    {
        require_once Root.d_S.'app'.d_S.'views'.d_S.$func.d_S.$opr.'.php';
    }
}
if(isset($controller)&& $controller=="home")
{
    require_once Root.d_S.'core'.d_S.'views'.d_S.'home.php';
}
if(isset($controller)&& $controller=="default")
{
    require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';
}

/**
 * Including Footer
 */
require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'footer.php';