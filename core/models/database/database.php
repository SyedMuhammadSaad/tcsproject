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
    public function inserttable($modelname,$value1,$value2,$value3)
    {
        DBAL::connect();
        $insertquery=NULL;
        if($modelname=="course")
        {
            $insertquery="INSERT INTO $modelname VALUES(?,?)";
            DBAL::connect()->prepare($insertquery)->execute([$value1,$value2]);
        }
        else
        {
            $insertquery="INSERT INTO $modelname VALUES(?,?,?)";
            DBAL::connect()->prepare($insertquery)->execute([$value1,$value2,$value3]);
        }
    }
    
    /**
     * Select all the table
     * @param string $modelname Table name
     */
    public function selecttable($modelname)
    {   
        DBAL::connect();
        $selectquery="SELECT * FROM $modelname";
        $result=DBAL::connect()->prepare($selectquery);
        $result->execute();
        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            print_r($row);
            echo "<br>";
        }
    }
    /**
     * Update Table
     * @param string $modelname Table name
     * @param string $value1 Column name
     * @param string $value2 Column name
     * @param mixed $newvalue New Value
     * @param mixed $oldvalue Value to be updated
     */
    public function updatetable($modelname,$value1,$value2,$newvalue,$oldvalue)
    {
        DBAL::connect();
        $update_query="UPDATE $modelname SET $value1 = ? WHERE $value2 = ?";
        DBAL::connect()->prepare($update_query)->execute([$newvalue,$oldvalue]);
    }
    /**
     * Delete table
     * @param string $modelname Table name
     * @param string $col Column name
     * @param mixed $value Value to be deleted
     */
    public function deletetable($modelname,$col,$value)
    {
        DBAL::connect();
        $delete_query="DELETE FROM $modelname WHERE $col = ?";
        DBAL::connect()->prepare($delete_query)->execute([$value]);
    }
}