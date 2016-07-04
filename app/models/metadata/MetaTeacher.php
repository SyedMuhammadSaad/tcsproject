<?php
/**
 * Metadata of teacher Model
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