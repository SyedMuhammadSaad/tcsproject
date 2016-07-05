<?php
/**
 * Testing Database
 */
use core\models\database\DBAL;
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
    /**
     * Returning array of arrays to testSelect
     * @return array
     */
    public function providertestSelect()
    {
        return array(array("teacher"),array("student"));
    }
    /**
     * Test Select of DBAL
     * @param string $modelname
     * @dataProvider providertestSelect
     */
    public function testSelect($modelname)
    {
        $res=DBAL::select("$modelname");
        $size=  sizeof($res);
        $this->assertNotEquals(0, $size);
    }
    /**
     * Returning array of arrays to testInsert
     * @return array
     */
    public function providertestInsert()
    {
        return array(array("teacher","Name","Baig",NULL),array("student","Name","Baig","An error occurred!"));
    }
    /**
     * Test Insert of DBAL
     * @param string $modelname
     * @param string $col
     * @param mixed $val
     * @param mixed $expected
     * @dataProvider providertestInsert
     */
    public function testInsert($modelname,$col,$val,$expected)
    {
        $res=DBAL::insert("$modelname",$col,$val);
        $this->assertEquals("$expected", $res);
    }
    /**
     * Returning array of arrays to testUpdate
     * @return array
     */
    public function providertestUpdate()
    {
        return array(array("teacher","Age",24,"Name","Baig",NULL),
                     array("student","Age",24,"Name","Baig","An error occurred!"));
    }
    /**
     * Test Update of DBAL
     * @param string $modelname
     * @param string $col
     * @param string $col1
     * @param mixed $val
     * @param mixed $val1
     * @param mixed $expected
     * @dataProvider providertestUpdate
     */
    public function testUpdate($modelname,$col,$col1,$val,$val1,$expected)
    {
        $res=DBAL::update("$modelname",$col,$val,$col1,$val1);
        $this->assertEquals("$expected", $res);
    }
    /**
     * Returning array of arrays to testDelete
     * @return array
     */
    public function providertestDelete()
    {
        return array(array("teacher","Name","Baig",NULL),
                     array("student","Name","Baig","An error occurred!"));
    }
    /**
     * Test Delete of DBAL
     * @param string $modelname
     * @dataProvider providertestDelete
     */
    public function testDelete($modelname,$col,$val,$expected)
    {
        $res=DBAL::delete("$modelname",$col,$val);
        $this->assertEquals("$expected", $res);
    }
}