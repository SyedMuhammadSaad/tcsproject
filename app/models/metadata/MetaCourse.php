<?php
/**
 * Metadata of course Model
 */
namespace app\models\metadata;
/**
 * MetaCourse has information about course Model
 */
class MetaCourse
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
}
