<?php
/**
 * ControllerInterface has functions of update and delete
 */
/**
 * Namespace declared
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
     * @param string $tablename
     * @param array $param
     */
    function add($tablename,$param);
    /**
     * Read table
     * @param string $tablename
     * @param array $param
     */
    function read($tablename,$param);
    /**
     * Update table
     * @param string $tablename
     * @param array $param
     */
    function edit($tablename,$param);
    /**
     * Delete table
     * @param string $tablename
     * @param array $param
     */
    function delete($tablename,$param);
}
?>