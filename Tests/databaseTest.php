<?php
/**
 * Testing Database
 */

/**
 * Including files
 */
include_once 'C:\xampp\htdocs\TCS_Project\core\models\database\database.php';

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