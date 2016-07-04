<?php
/**
 * Metadata of course Model
 */

/**
 * First array has attribute's names, second has their datatype and third has the names which are numeric attributes.
 * @return array Array of arrays
 */
function metadata()
{
    return array(
        array(
            //Attributes
            'CourseName','CourseCode'
        ),
        array(
            //datatypes
            'CourseName'=>'VARCHAR',
            'CourseCode'=>'INT'
        ),
        array(
            //numeric
            'CourseCode'
        )
    );
}