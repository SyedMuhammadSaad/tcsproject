<?php
/**
 * Metadata of student Model
 */

/**
 * First array has attribute's names, second has their datatype and third has the names which are numeric attributes.
 * @return array Array of arrays
 */
function metastudent()
{
    return array(
        array(
            //Attributes
            'ID','Name','Age','Degree'
        ),
        array(
            //datatypes
            'ID'=>'INT',
            'Name'=>'VARCHAR',
            'Age'=>'INT',
            'Degree'=>'VARCHAR'
        ),
        array(
            //numeric
            'ID',
            'Age'
        )
    );
}
