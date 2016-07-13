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
     * @param string $tablename
     * @param string $column1
     */
    function create($tablename,$column1);
    /**
     * Read model
     * @param string $tablename
     */
    function read($tablename);
    /**
     * Update model
     * @param string $tablename
     * @param string $column1
     * @param string $column2
     */
    function update($tablename,$column1,$column2);
    /**
     * Delete model
     * @param string $tablename
     * @param string $column
     */
    function delete($tablename,$column);
}

?>