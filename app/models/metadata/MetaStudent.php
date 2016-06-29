<?php
/**
 * Metadata of student Model
 */
namespace app\models\metadata;
/**
 * MetaStudent has information about student Model
 */
class MetaStudent
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
                'Name','Age','Degree'
            ),
            array(
                //datatypes
                'Name'=>'VARCHAR',
                'Age'=>'INT',
                'Degree'=>'VARCHAR'
            ),
            array(
                //numeric
                'Age'
            )
        );
    }
}

