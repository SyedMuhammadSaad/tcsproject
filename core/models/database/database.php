<?php
/**
 * Database connection formed with insert,update,delete and select queries
 */

/**
 * DBAL singleton class connects with PDO database
 */
class DBAL
{
    /**
     * Empty constructor
     */
    private function __construct()
    {    
    }
    /**
     * Empty clone funciton
     */
    public function __clone()
    {    
    }
    /**
     * Empty wakeup function
     */
    public function __wakeup()
    {
    }
    /**
     *connection made to connect to database
     * @var PhpPlatform 
     */
    private static $connection=null;
    /**
     * connect() connects with database
     * @return PhpPlatform
     */
    public static function connect()
    {
        if (self::$connection==null) 
        {
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false
            ];
            self::$connection=new PDO('mysql:host=localhost;dbname=tcsproject','root','',$opt);
        }
        return self::$connection;
    }
    
    /**
     * Insertion command executes here
     * @param string $modelname Table name
     * @param mixed $value1 First column
     * @param mixed $value2 Second column
     * @param mixed $value3 Third column if present
     */
    public function insert($modelname,$column,$value1)
    {
        DBAL::connect();
        $insertquery="INSERT INTO {$modelname} ({$column}) VALUES (?);";
        try
        {
            DBAL::connect()->prepare($insertquery)->execute([$value1]);
        }
        catch(PDOException $e)
        {
            echo "An error occurred!".$e->getMessage();
        }
        
    }
    
    /**
     * Select all the table
     * @param string $modelname Table name
     * @return array Array of table values
     */
    public function select($modelname)
    {   
        DBAL::connect();
        $result1 = DBAL::connect()->prepare("select * from $modelname limit 1");
        $result1->execute();
        $fields = array_keys($result1->fetch(PDO::FETCH_ASSOC));
        $selectquery="SELECT * FROM $modelname";
        $result=DBAL::connect()->prepare($selectquery);
        $result->execute();
        $col=0;
        $arr=array();//$arr is 2D array and it will store the values of table
        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            for($col=0;$col<$result->columnCount();$col++)
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
     */
    public function update($modelname,$value1,$value2,$newvalue,$oldvalue)
    {
        DBAL::connect();
        $update_query="UPDATE $modelname SET $value1 = ? WHERE $value2 = ?";
        try
        {
            DBAL::connect()->prepare($update_query)->execute([$newvalue,$oldvalue]);
        }
        catch(PDOException $e)
        {
            echo "An error occurred!".$e->getMessage();
        }
    }
    /**
     * Delete table
     * @param string $modelname Table name
     * @param string $col Column name
     * @param mixed $value Value to be deleted
     */
    public function delete($modelname,$col,$value)
    {
        DBAL::connect();
        $delete_query="DELETE FROM $modelname WHERE $col = ?";
        try
        {
            DBAL::connect()->prepare($delete_query)->execute([$value]);
        }
        catch(PDOException $e)
        {
            echo "An error occurred!".$e->getMessage();
        }
    }
}
//DBAL::update("teacher","Age","Name",28,"Ali Afzal");
//DBAL::select("teacher");
//print_r(DBAL::select("student"));
//DBAL::insert("course","CourseName","CLD");