<?php

namespace farm_v2\field;

class PotatoFactory extends FieldFactory
{
    public function createField(int $id): Field {
        return new Potato($id);
    }
}