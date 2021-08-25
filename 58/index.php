<?php

require_once 'iFile.php';
require_once 'File.php';

use n58\File;



$file = new File("D:/OpenServer/domains/localhost/practic/web/58/new_file.txt");

echo $file->getPath();
echo "<br/>";
echo $file->getDir();
echo "<br/>";
echo $file->getName();
echo "<br/>";
echo $file->getExt();
echo "<br/>";
echo $file->getSize();
echo "<br/>";


echo $file->setText("привет");
echo "<br/>";
echo $file->getText();
echo "<br/>";

echo $file->appendText(" коллега");
echo "<br/>";
echo $file->getText();
echo "<br/>";
echo $file->rename("new_file");