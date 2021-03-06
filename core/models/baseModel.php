<?php
/**
 * BaseModel impements from ModelInterface
 */
/**
 * Namespace used and declared
 */
namespace core\models;
use core\models\ModelInterface;
/**
 * BaseModel implements from ModelInterface and defines all the functions
 */
class BaseModel implements ModelInterface
{
    /**
     * Model Name is saved here
     * @var string Name of model
     */
    public $nameofmodel;
    /**
     * dbobj is the DatabaseConnection object
     * @var mixed 
     */
    private $dbobj;
    /**
     *
     * @var array Array of attributes in model
     */
    private $attr;
    /**
     * Constructor setting attributes in array $attr
     * @param string $type
     */
    function __construct($type) 
    {
        require_once Root.d_S.'app'.d_S.'config.php';
        global $dbcon;
        $DALName= "core\models\database\\".$dbcon['DAL'];
        $this->dbobj=new $DALName;
        $this->nameofmodel=$type;
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
    function __set($name, $value=NULL) {
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
     * @param array $column
     */
    function create($column)
    {
        $this->dbobj->insert("$this->nameofmodel",$column[2],$this->__get($column[2]));
    }
    /**
     * Read model
     */
    function read($column = NULL)
    {
        return $this->dbobj->select("$this->nameofmodel");
    }
    /**
     * Update model
     * @param array $column
     */
    function update($column)
    {
        $this->dbobj->update("$this->nameofmodel",$column[0],$column[1],$this->__get($column[0]),$this->__get($column[1]));
    }
    /**
     * Delete model
     * @param array $column
     */
    function delete($column)
    {
        $this->dbobj->delete("$this->nameofmodel",$column[0],$this->__get($column[0]));
    }
    /**
     * Returns last ID
     * @return string
     */
    function lastID()
    {
        return $this->dbobj->getlastid("$this->nameofmodel");
    }
}

?>