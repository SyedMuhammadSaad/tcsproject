<?php
/**
 * ViewManager file calling respective views
 */

namespace core\views;
class ViewManager
{
    static public function display($parameters)
    {
        if($parameters['layout']=='default')
        {
            /**
             * Including header
             */
            require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'header.php';
            self::pages($parameters);
            /**
             * Including Footer
             */
            require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'footer.php';
        }
        else
        {
            self::pages($parameters);
        }
    }
    
    public function pages($parameters)
    {
        if(isset($parameters['error']) && $parameters['error']==true)
        {
            require_once Root.d_S.'core'.d_S.'views'.d_S.'error.php';
        }
        else if(isset($parameters['action']) && $parameters['action']!=NULL)
        {
            $modl=$parameters['model'];
            $action=$parameters['action'];
            $entity=$parameters['entity'];
            if($parameters['action']=="add")//if add then calls the generic add view
            {
                require_once Root.d_S.'app'.d_S.'views'.d_S.'generic'.d_S.$action.'.php';
            }
            else//else calls the respective views
            {
                if($parameters['action']=='read')
                {
                    $count=$parameters['count'];
                }
                require_once Root.d_S.'app'.d_S.'views'.d_S.$entity.d_S.$action.'.php';
            }
        }
        if(isset($parameters['controller'])&& $parameters['controller']=="default")
        {
            require_once Root.d_S.'app'.d_S.'views'.d_S.'layouts'.d_S.'default.php';
        }
    }
}
