<?php

require_once 'Tetragon.php';
require_once 'Circle.php';
require_once 'Disk.php';

$disk = new Disk(25);

echo $disk->getDiameter();
