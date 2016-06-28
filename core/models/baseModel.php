<?php
/**
 * BaseModel impements from ModelInterface
 */
/**
 * Namespace used and declared
 */
namespace core\models;
use core\models\database\DBAL;
use core\models\ModelInterface;
/**
 * BaseModel implements from ModelInterface and defines all the functions
 */
class BaseModel implements ModelInterface
{
    /**
     * Create model
     * @param string $tablename
     * @param string $column1
     * @param mixed $value1
     */
    function create($tablename,$column1,$value1)
    {
        DBAL::insert("$tablename",$column1,$value1);
    }
    /**
     * Read model
     * @param string $tablename
     */
    function read($tablename)
    {
        return DBAL::select("$tablename");
    }
    /**
     * Update model
     * @param string $tablename
     * @param string $column1
     * @param string $column2
     * @param mixed $newvalue
     * @param mixed $oldvalue
     */
    function update($tablename,$column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::update("$tablename",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete model
     * @param string $tablename
     * @param string $column
     * @param mixed $value
     */
    function delete($tablename,$column,$value)
    {
        DBAL::delete("$tablename",$column,$value);
    }
}

?>