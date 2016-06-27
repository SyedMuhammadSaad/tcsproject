<?php
/**
 * ModelInterface has functions with all setter and getter
 */
namespace core\models;
/**
 * ModelInterface has pure virtual functions.
 */
interface ModelInterface
{
    /**
     * Create model
     * @param type $column1
     * @param type $value1
     */
    function create($tablename,$column1,$value1);
    /**
     * Read model
     */
    function read($tablename);
    /**
     * Update model
     * @param type $column1
     * @param type $column2
     * @param type $newvalue
     * @param type $oldvalue
     */
    function update($tablename,$column1,$column2,$newvalue,$oldvalue);
    /**
     * Delete model
     * @param type $column
     * @param type $value
     */
    function delete($tablename,$column,$value);
}

?>