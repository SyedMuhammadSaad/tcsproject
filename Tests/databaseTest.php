<?php
/**
 * Testing Database
 */
/**
 * Including files
 */
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'index.php';
use core\models\database\DBAL;
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.'DBAL.php';
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config.php';
/**
 * databaseTest class tests the database connection
 */
class databaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to testDBAL
     * @return array
     */
    public function providertestDBAL()
    {
        $object=NULL;
        return array(array($object,$object),array($object,DBAL::connect()));
    }
    /**
     * Testing Singleton connection of DBAL
     * @param PHPPlatform $res
     * @param PHPPlatform $obj
     * @dataProvider providertestDBAL
     */
    public function testDBAL($res,$obj)
    {
        $res=DBAL::connect();
        $this->assertEquals($res,$obj);
    }
}