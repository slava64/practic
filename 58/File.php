<?php

namespace n58;

class File implements iFile
{
    private $filePath;

    public function __construct($filePath)
    {
        if(!is_file($filePath)) {
            exit("Файл {$filePath} не найден");
        }
        $this->filePath = $filePath;
    }

    public function getPath() {
        return $this->filePath;
    }
    public function getDir() {
        return pathinfo($this->filePath)['dirname'];
    }
    public function getName() {
        return pathinfo($this->filePath)['basename'];
    }
    public function getExt() {
        return pathinfo($this->filePath)['extension'];
    }
    public function getSize() {
        return filesize($this->filePath);
    }

    public function getText() {
        return file_get_contents($this->filePath);
    }
    public function setText($text) {
       file_put_contents($this->filePath, $text);
    }
    public function appendText($text) {
        file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    public function copy($copyPath) {
        if(!copy($this->filePath, $copyPath)) {
            echo "Не удалось скопировать файл " . $this->filePath;
        }
    }
    public function delete() {
        unlink($this->filePath);
    }
    public function rename($newName) {
        rename($this->filePath, $this->getDir()."/".$newName.".".$this->getExt());
    }
    public function replace($newPath) {
        rename($this->filePath, $newPath);
    }
}