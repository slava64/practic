<?php

use filter\Filter;
use validation\Validation;

class Str
{
    private $text;
    private $filters = [];
    private $validations = [];
    private $errors = [];

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function addFilter(Filter $filter) {
        $this->filters[] = $filter;
        return $this;
    }

    public function getFilters(): array {
        return $this->filters;
    }

    public function addValidation(Validation $validation) {
        $this->validations[] = $validation;
        return $this;
    }

    public function getValidations(): array {
        return $this->validations;
    }

    public function filter() {
        foreach ($this->filters as $filter) {
            $this->text = $filter->execute($this->text);
        }
    }

    public function validation() {
        foreach ($this->validations as $validation) {
            if($validation->execute($this->text) === false) {
                $this->errors[] = $validation->getError();
            }
        }

        if(count($this->errors) > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function getErrors(): array {
        return $this->errors;
    }

    public function __toString()
    {
        return $this->text;
    }
}