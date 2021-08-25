<?php

class ParentClass
{

}

class ChildClass extends ParentClass
{

}

$obj = new ChildClass();

var_dump(is_a($obj, 'ChildClass'));
var_dump(is_a($obj, 'ParentClass'));