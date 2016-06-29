<?php

/**
 * Testing Rquest
 */
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'index.php';
//use core\util\Request;
/**
 * requesTest class tests the request.php
 */
class requestTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to test testContollerFactory class
     * @return array
     */
    public function providertestRequest()
    {
        return array(array(NULL,"course"),array(NULL,"teacher"),array(NULL,"professor"));
    }
    /**
     * ControllerFactory tested here
     * @param string $type table name passed here
     * @dataProvider providertestRequest
     */
    public function testRequest($opr,$type)
    {
        
        $val=ucfirst($type);
        $this->assertEquals($val."Controller",$obj=new core\util\Request($opr, $type));
    }
}
