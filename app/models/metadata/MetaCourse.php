<?php
/**
 * Metadata of course Model
 */

/**
 * First array has attribute's names, second has their datatype and third has the names which are numeric attributes.
 * @return array Array of arrays
 */
function metacourse()
{
    return array(
        array(
            //Attributes
            'ID','CourseName','CourseCode'
        ),
        array(
            //datatypes
            'ID'=>'INT',
            'CourseName'=>'VARCHAR',
            'CourseCode'=>'INT'
        ),
        array(
            //numeric
            'ID',
            'CourseCode'
        )
    );
}