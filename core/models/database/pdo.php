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
        $insertquery="INSERT INTO {$modelname} ({$column}) VALUES (?);";
        try
        {
            $values=array($value1);
            PDODriver::execute($insertquery,$values);
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
        $query1="select * from $modelname limit 1";
        $returnresult1=PDODriver::execute($query1);
        $fields = array_keys($returnresult1->fetch(\PDO::FETCH_ASSOC));
        $selectquery="SELECT * FROM $modelname";
        $returnresult=PDODriver::execute($selectquery);
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
        $update_query="UPDATE $modelname SET $value1 = ? WHERE $value2 = ?";
        try
        {
            $values=array($newvalue,$oldvalue);
            PDODriver::execute($update_query,$values);
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
        $delete_query="DELETE FROM $modelname WHERE $col = ?";
        try
        {
            $values=array($value);
            PDODriver::execute($delete_query,$values);
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage()."<br>";
            return "An error occurred!";
        }
    }
    /**
     * Getting last ID
     * @param string $modelname
     * @return string
     */
    public function getlastid($modelname)
    {
        $querycountid="SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = '$modelname'";
        $row=PDODriver::execute($querycountid);
        $result=$row->fetch();
        $id=$result['AUTO_INCREMENT'];
        return "Last ID was ".$id;
    }
}