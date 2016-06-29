<?php
/**
 * Metadata of teacher Model
 */
namespace app\models\metadata;
/**
 * MetaTeacher has information about teacher Model
 */
class MetaTeacher
{
    /**
     * First array has attribute's names, second has their datatype and third has the names which are numeric attributes.
     * @return array Array of arrays
     */
    public function metadata()
    {
        return array(
            array(
                //Attributes
                'Name','Age','Course'
            ),
            array(
                //datatypes
                'Name'=>'VARCHAR',
                'Age'=>'INT',
                'Course'=>'VARCHAR'
            ),
            array(
                //numeric
                'Age'
            )
        );
    }
}
//$obj=new MetaTeacher();
//print_r($obj->metadata());