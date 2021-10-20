<?php

namespace farm_v2\field;

class CornFactory extends FieldFactory
{
    public function createField(int $id): Field
    {
        return new Corn($id);
    }
}