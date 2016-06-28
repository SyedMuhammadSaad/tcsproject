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
     * @param string $tablename Tablename passed here
     * @param string $column1
     * @param mixed $value1
     */
    function create($tablename,$column1,$value1);
    /**
     * Read model
     * @param string $tablename Tablename passed here
     */
    function read($tablename);
    /**
     * Update model
     * @param string $tablename Tablename passed here
     * @param string $column1
     * @param string $column2
     * @param mixed $newvalue
     * @param mixed $oldvalue
     */
    function update($tablename,$column1,$column2,$newvalue,$oldvalue);
    /**
     * Delete model
     * @param string $tablename Tablename passed here
     * @param string $column
     * @param mixed $value
     */
    function delete($tablename,$column,$value);
}

?>