<?php

class GrandParentClass
{

}

class ParentClass extends GrandParentClass
{

}

class ChildClass extends ParentClass
{

}

var_dump(is_subclass_of('ChildClass', 'GrandParentClass'));
var_dump(is_subclass_of('ParentClass', 'GrandParentClass'));
var_dump(is_subclass_of('ChildClass', 'ParentClass'));