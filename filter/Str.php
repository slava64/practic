<?php

use filter\Filter;
use validation\Validation;

class Str
{
    private $texts = [];
    private $filters = [];
    private $validations = [];
    private $errors = [];

    public function __construct(array $texts = [])
    {
        $this->texts = $texts;
    }

    public function addText(string $text) {
        $this->texts[] = $text;
    }

    public function getText(int $index): string {
        return $this->texts[$index];
    }

    public function getTexts(): array {
        return $this->texts;
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
            foreach ($this->texts as $i => $text) {
                $this->texts[$i] = $filter->execute($text);
            }
        }
    }

    public function validation() {
        foreach ($this->validations as $validation) {
            foreach ($this->texts as $i => $text) {
                if($validation->execute($text) === false) {
                    $this->errors[$i][] = $validation->getError();
                }
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
}