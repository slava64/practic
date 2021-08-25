<?php

class User {

    private $name;
    private $surname;
    private $patronymic;

    public function setName(string $name): User {
        $this->name = $name;
        return $this;
    }

    public function setSurname(string $surname): User {
        $this->surname = $surname;
        return $this;
    }

    public function setPatronymic(string $patronymic): User {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getSurname(): string {
        return $this->surname;
    }
    public function getPatronymic(): string {
        return $this->patronymic;
    }

    public function getFullName(): string {
        return $this->getSurname() . ' ' . $this->getName() . ' ' . $this->getPatronymic();
    }
}