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
     *
     * @var array Array of attributes in model
     */
    private $attr;
    /**
     * Constructor setting attributes in array $attr
     * @param string $type
     */
    function __construct($type) {
        $dest=  ucfirst($type);
        require_once Root.d_S.'app'.d_S.'models'.d_S.'metadata'.d_S.'Meta'.$dest.'.php';
        $metatype="meta$type";
        $temp=  $metatype();
        self::__set("attr",$temp[0]);
    }
    /**
     * Magic Setter
     * @param string $name
     * @param mixed $value
     */
    function __set($name, $value) {
        $this->$name=$value;
    }
    /**
     * Magic Getter
     * @param string $name
     * @return mixed
     */
    function __get($name) {
        return $this->$name;
    }
    /**
     * Create model
     * @param string $tablename
     * @param string $column1
     */
    function create($tablename,$column1)
    {
        DBAL::insert("$tablename",$column1,$this->__get($column1));
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
     */
    function update($tablename,$column1,$column2)
    {
        DBAL::update("$tablename",$column1,$column2,$this->__get($column1),$this->__get($column2));
    }
    /**
     * Delete model
     * @param string $tablename
     * @param string $column
     */
    function delete($tablename,$column)
    {
        DBAL::delete("$tablename",$column,$this->__get($column));
    }
}

?>