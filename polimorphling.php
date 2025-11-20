<?php

class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function sayAboutMe() {
        echo "Пользователь: {$this->firstName} {$this->lastName}<br>";
        echo "Email: {$this->email}<br>";
        echo "_____________________<br>";
    }
}

class Teacher extends User {
    private $subjects = [];
    
    public function __construct($firstName, $lastName, $email, $subjects = []) {
        parent::__construct($firstName, $lastName, $email);
        $this->subjects = $subjects;
    }
    
    public function sayAboutMe() {
        echo "Преподаватель: {$this->getFirstName()} {$this->getLastName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Предметы: " . implode(", ", $this->subjects) . "<br>";
        echo "_____________________<br>";
    }
}

class Manager extends User {
    private $position;
    private $jobDuties = [];
    
    public function __construct($firstName, $lastName, $email, $position, $jobDuties = []) {
        parent::__construct($firstName, $lastName, $email);
        $this->position = $position;
        $this->jobDuties = $jobDuties;
    }
    
    public function sayAboutMe() {
        echo "Администрация: {$this->getFirstName()} {$this->getLastName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Должность: {$this->position}<br>";
        echo "Обязанности: " . implode(", ", $this->jobDuties) . "<br>";
        echo "_____________________<br>";
    }
}

class Student extends User {
    private $course;
    
    public function __construct($firstName, $lastName, $email, $course = 1) {
        parent::__construct($firstName, $lastName, $email);
        $this->course = $course;
    }
    
    public function sayAboutMe() {
        echo "Студент: {$this->getFirstName()} {$this->getLastName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Курс: {$this->course}<br>";
        echo "_____________________<br>";
    }
}

$persons = [
    new Student("Алексей", "Мартынихин", "alexey@gmail.com", 2),
    new Student("Лева", "Полуян", "Lewa@gmail.com", 1),
    new Teacher("Сергей", "Пэлэгин", "sergey@gmail.com", ["Физра"]),
    new Teacher("Марат", "Аргунов", "Marrar@gmail.com", ["Информатика", "Программирование"]),
    new Manager("Павел", "Моноколесов", "Pablo@gmail.com", "Директор", ["Управление моноколесом", "ш"]),
    new Manager("Даниил", "Гусаров", "D4n!!l@gmail.com", "Завуч", ["Расписание"]),
    new Student("Аристрах", "Матросов", "4rr!k@gmail.com", 3)
];

usort($persons, function($a, $b) {
    return strcmp($a->getFirstName(), $b->getFirstName());
});

echo "<h2>Все участники:</h2>";
foreach ($persons as $person) {
    $person->sayAboutMe();
}

echo "<h2>Розыгрыш:</h2>";
$winner = $persons[rand(0, count($persons) - 1)];
echo "<strong>Победитель:</strong><br>";
$winner->sayAboutMe();

?>