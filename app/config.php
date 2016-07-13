<?php
/**
 * Config.php is configuring the database file
 */
namespace app;
/**
 * Config class having array of configuration
 */
class Config
{
    /**
     *An array of configuration
     * @var array 
     */
    static public $dbcon=array('DB_NAME'=>'tcsproject','DB_USER'=>'root','DB_PASSWORD'=>'','DB_HOST'=>'localhost','DB_TYPE'=>'mysql','DAL'=>'PDO');
}    