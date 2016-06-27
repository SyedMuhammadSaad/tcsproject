<?php
/**
 * ControllerInterface has functions of update and delete
 */

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
    function create($param);
    /**
     * Read table
     * @param array $param
     */
    function read($param);
    /**
     * Update table
     * @param array $param
     */
    function update($param);
    /**
     * Delete table
     * @param array $param
     */
    function delete($param);
}
?>