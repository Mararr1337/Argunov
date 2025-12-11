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
    
    public function getSubjects() {
        return $this->subjects;
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
    
    public function getPosition() {
        return $this->position;
    }
    
    public function getJobDuties() {
        return $this->jobDuties;
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
    
    public function getCourse() {
        return $this->course;
    }
}

// Исходные данные
$students = [
    new Student("Алексей", "Мартынихин", "alexey@gmail.com", 2),
    new Student("Лева", "Полуян", "Lewa@gmail.com", 1),
    new Student("Аристрах", "Матросов", "4rr!k@gmail.com", 3)
];

$teachers = [
    new Teacher("Сергей", "Пэлэгин", "sergey@gmail.com", ["Физра"]),
    new Teacher("Марат", "Аргунов", "Marrar@gmail.com", ["Информатика", "Программирование"])
];

$managers = [
    new Manager("Павел", "Моноколесов", "Pablo@gmail.com", "Директор", ["Управление моноколесом", "ш"]),
    new Manager("Даниил", "Гусаров", "D4n!!l@gmail.com", "Завуч", ["Расписание"])
];

// Функция для преобразования объектов в массивы для JSON
function prepareDataForJson($objects) {
    $data = [];
    foreach ($objects as $obj) {
        if ($obj instanceof Student) {
            $data[] = [
                'type' => 'student',
                'firstName' => $obj->getFirstName(),
                'lastName' => $obj->getLastName(),
                'email' => $obj->getEmail(),
                'course' => $obj->getCourse()
            ];
        } elseif ($obj instanceof Teacher) {
            $data[] = [
                'type' => 'teacher',
                'firstName' => $obj->getFirstName(),
                'lastName' => $obj->getLastName(),
                'email' => $obj->getEmail(),
                'subjects' => $obj->getSubjects()
            ];
        } elseif ($obj instanceof Manager) {
            $data[] = [
                'type' => 'manager',
                'firstName' => $obj->getFirstName(),
                'lastName' => $obj->getLastName(),
                'email' => $obj->getEmail(),
                'position' => $obj->getPosition(),
                'jobDuties' => $obj->getJobDuties()
            ];
        }
    }
    return $data;
}

$usersData = [
    'students' => prepareDataForJson($students),
    'teachers' => prepareDataForJson($teachers),
    'managers' => prepareDataForJson($managers)
];

$jsonData = json_encode($usersData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('users.json', $jsonData);
echo "Файл users.json создан успешно!<br><br>";

?>