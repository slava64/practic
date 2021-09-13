<?php

abstract class FieldFactory
{
    abstract public function createField(int $id);

    public function createFieldList(int $count): array {
        $fieldList = [];
        for($i = 0; $i < $count; $i++) {
            $fieldList[] = $this->createField($i);
        }
        return $fieldList;
    }
}