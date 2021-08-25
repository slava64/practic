<?php

class ParentClass
{

}

class childClass extends ParentClass
{

}

$child = new childClass();

var_dump(get_parent_class('childClass'));
var_dump(get_parent_class($child));


