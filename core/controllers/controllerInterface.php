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
     * Add function calls the respective controller create function
     * @param array $param
     * @return boolean
     */
    function add($param);
    /**
     * Read function calls the respective controllers read function
     * @param array $param Null in read case
     * @return array
     */
    function read($param = NULL);
    /**
     * Edit function calls the respective controllers update function
     * @param array $param
     * @return boolean
     */
    function edit($param);
    /**
     * Delete function calls the respective controllers delete function
     * @param array $param
     * @return boolean
     */
    function delete($param);
}
?>