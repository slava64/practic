<?php

class WheatFactory extends FieldFactory
{
    public function createField(int $id): Field {
        return new Wheat($id);
    }
}