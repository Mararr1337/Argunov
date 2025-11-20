<?php

class User {
    protected $name;
    protected $surname;
    protected $email;
    private $role;
    
    public function __construct($name, $surname, $email) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->role = 'User';
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getSurname() {
        return $this->surname;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getRole() {
        return $this->role;
    }
    
    public static function makeAdmin($user) {
        $user->role = 'Admin';
    }

    public static function createAdmin($name, $surname, $email) {
        $admin = new User($name, $surname, $email);
        $admin->role = 'Admin';
        return $admin;
    }
}

class Student extends User {
    private static $numberStudents = 0; 
    
    public function __construct($name, $surname, $email) {
        parent::__construct($name, $surname, $email);
        self::$numberStudents++;
    }
    
    public static function getNumberStudents() {
        return self::$numberStudents;
    }
    
    public static function printStudentInfo($student) {
        echo "Студент: " . $student->getName() . " " . $student->getSurname(),'<br>';
        echo "Email: " . $student->getEmail(),'<br>';
        echo "Роль: " . $student->getRole(),'<br>';
        echo "__________________",'<br>';
    }
    
    public function __destruct() {
        self::$numberStudents--;
    }
}

echo "Создаем 5 студентов:",'<br>';
$student1 = new Student("Марат", "Аргунов", "Marat@gmail.com");
$student2 = new Student("Члева", "Полуян", "4Lewa@gmail.com");
$student3 = new Student("Даниил", "Гусаров", "Dan1l@gmail.com");
$student4 = new Student("Алеша", "Мaртынихин", "Alyosha@gmail.com");
$student5 = new Student("Сергей", "Пэлэгин", "sergey@gmail.com");

echo "Количество студентов: " . Student::getNumberStudents(),'<br>';

echo "Удаляем двух студентов",'<br>';
unset($student2);
unset($student3);

echo "Количество студентов после удаления: " . Student::getNumberStudents(),'<br>';

echo "Назначаем студенту роль администратора:",'<br>';
User::makeAdmin($student1);

echo "Роль студента " . $student1->getName() . ": " . $student1->getRole(),'<br>';

echo "Информация об оставшихся студентах:",'<br>';
Student::printStudentInfo($student1);
Student::printStudentInfo($student4);
Student::printStudentInfo($student5);

echo "Создаем нового администратора:",'<br>';
$newAdmin = User::createAdmin("Павел","Моноколесов", "Mono@gmail.com");
echo "Новый администратор: " . $newAdmin->getName() . " " . $newAdmin->getSurname(),'<br>';
echo "Роль: " . $newAdmin->getRole(),'<br>';

?>