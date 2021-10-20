<?php

namespace farm_v2\field;

class WheatFactory extends FieldFactory
{
    public function createField(int $id): Field
    {
        return new Wheat($id);
    }
}