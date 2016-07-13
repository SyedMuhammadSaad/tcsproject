<?php
/**
 * Database connection formed with insert,update,delete and select queries
 */
namespace core\models\database;
use core\models\database\DBAL;
use core\models\database\drivers\pdo\PDODriver;
/**
 * DBAL singleton class connects with PDO database
 */
class PDO extends DBAL
{
   
    
    /**
     * Insertion command executes here
     * @param string $modelname The name of model
     * @param string $column The name of the column
     * @param mixed $value1 The value to be inserted
     * @return string Error Message
     */
    public function insert($modelname,$column,$value1)
    {
        PDODriver::connect();
        $insertquery="INSERT INTO {$modelname} ({$column}) VALUES (?);";
        try
        {
            $pdoconnection=PDODriver::connect();
            $values=array($value1);
            PDODriver::execute($pdoconnection,$insertquery,$values);
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage()."<br>";
            return "An error occurred!";
        }
        
    }
    
    /**
     * Select all the table
     * @param string $modelname Table name
     * @return array Array of table values
     */
    public function select($modelname)
    {   
        PDODriver::connect();
        $result1 = PDODriver::connect();
        $query1="select * from $modelname limit 1";
        $returnresult1=PDODriver::execute($result1,$query1);
        //$result1->execute();
        $fields = array_keys($returnresult1->fetch(\PDO::FETCH_ASSOC));
        $selectquery="SELECT * FROM $modelname";
        $result=PDODriver::connect();
        $returnresult=PDODriver::execute($result,$selectquery);
        $col=0;
        $arr=array();//$arr is 2D array and it will store the values of table
        foreach($returnresult->fetchAll(\PDO::FETCH_ASSOC) as $row)
        {
            for($col=0;$col<$returnresult->columnCount();$col++)
            {
                $arr1[$col]=$row[$fields[$col]];
            }
            array_push($arr,$arr1);
        }
        return $arr;//retruning the values of table.
    }
    /**
     * Update Table
     * @param string $modelname Table name
     * @param string $value1 Column name
     * @param string $value2 Column name
     * @param mixed $newvalue New Value
     * @param mixed $oldvalue Value to be updated
     * @return string Error Message
     */
    public function update($modelname,$value1,$value2,$newvalue,$oldvalue)
    {
        PDODriver::connect();
        $update_query="UPDATE $modelname SET $value1 = ? WHERE $value2 = ?";
        try
        {
            $pdoconnection=PDODriver::connect();
            $values=array($newvalue,$oldvalue);
            PDODriver::execute($pdoconnection,$update_query,$values);
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage()."<br>";
            return "An error occurred!";
        }
    }
    /**
     * Delete table
     * @param string $modelname Table name
     * @param string $col Column name
     * @param mixed $value Value to be deleted
     * @return string Error Message
     */
    public function delete($modelname,$col,$value)
    {
        PDODriver::connect();
        $delete_query="DELETE FROM $modelname WHERE $col = ?";
        try
        {
            $pdoconnection=PDODriver::connect();
            $values=array($value);
            PDODriver::execute($pdoconnection,$delete_query,$values);
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage()."<br>";
            return "An error occurred!";
        }
    }
}