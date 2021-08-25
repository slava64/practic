<?php
class User
{
    private $name;
    private $surname; // объявим свойство как protected
    private $birthday;
    private $age;

    public function __construct(string $name, string $surname, string $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);

    }

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getBirthday(): string {
        return $this->birthday;
    }

    private function calculateAge(string $birthday): string {
        list($year, $month, $day) = explode("-", $birthday);
        $time = time() - mktime(0, 0 , 0, $month, $day, $year);

        return floor($time/(365*24*60*60));
    }
}