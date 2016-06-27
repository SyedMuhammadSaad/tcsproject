<?php
/**
 * ControllerInterface has functions of update and delete
 */
namespace core\controllers;
/**
 * ControllerInterface has pure virtual functions.
 */
interface ControllerInterface
{
    /**
     * Model name
     * @param string $typeofModel
     */
    function __construct($typeofModel);
    /**
     * Create table
     * @param array $param
     */
    function create($tablename,$param);
    /**
     * Read table
     * @param array $param
     */
    function read($tablename,$param);
    /**
     * Update table
     * @param array $param
     */
    function update($tablename,$param);
    /**
     * Delete table
     * @param array $param
     */
    function delete($tablename,$param);
}
?>