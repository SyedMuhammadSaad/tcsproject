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
    function setModel($typeofModel);
    /**
     * Update table
     * @param string $column1
     * @param string $column2
     * @param mixed $newvalue
     * @param mixed $oldvalue
     */
    function update($column1,$column2,$newvalue,$oldvalue);
    /**
     * Delete table
     * @param string $column1
     * @param mixed $oldvalue
     */
    function delete($column1,$oldvalue);
}
?>