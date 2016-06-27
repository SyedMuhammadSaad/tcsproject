<?php
/**
 * BaseModel impements from ModelInterface
 */
namespace core\models;
use core\models\database\DBAL;
use core\models\ModelInterface;
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\modelInterface.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'modelInterface.php';
/**
 * BaseModel implements from ModelInterface and defines all the functions
 */
class BaseModel implements ModelInterface
{
    /**
     * Create model
     * @param type $column1
     * @param type $value1
     */
    function create($tablename,$column1,$value1)
    {
        DBAL::insert("$tablename",$column1,$value1);
    }
    /**
     * Read model
     */
    function read($tablename)
    {
        return DBAL::select("$tablename");
    }
    /**
     * Update model
     * @param type $column1
     * @param type $column2
     * @param type $newvalue
     * @param type $oldvalue
     */
    function update($tablename,$column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::update("$tablename",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete model
     * @param type $column
     * @param type $value
     */
    function delete($tablename,$column,$value)
    {
        DBAL::delete("$tablename",$column,$value);
    }
}

?>