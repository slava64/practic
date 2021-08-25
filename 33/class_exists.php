<?php

class Test1
{

}

$className = !empty($_GET['class']) ? $_GET['class'] : null;

var_dump(class_exists($className));

var_dump(class_exists($className));

