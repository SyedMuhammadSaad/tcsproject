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
     * @param array $column
     */
    function create($column);
    /**
     * Read model
     */
    function read($param = NULL);
    /**
     * Update model
     * @param array $column
     */
    function update($column);
    /**
     * Delete model
     * @param array $column
     */
    function delete($column);
    /**
     * Gets the last ID
     */
    function lastID();
}

?>