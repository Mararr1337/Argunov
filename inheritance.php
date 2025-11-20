<?php 
class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $this->correctName($firstName);
        $this->lastName = $this->correctName($lastName);
        
        if (!$this->isEmailCorrect($email)) {
            echo "Ошибка: Некорректный email '$email' при создании пользователя<br>";
        }
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

    public function setFirstName($firstName) {
        $this->firstName = $this->correctName($firstName);
    }

    public function setLastName($lastName) {
        $this->lastName = $this->correctName($lastName);
    }

    public function setEmail($email) {
        if (!$this->isEmailCorrect($email)) {
            echo "Ошибка: Некорректный email '$email'<br>";
        }
        $this->email = $email;
    }

    public function sayAboutMe() {
        echo "Пользователь: {$this->firstName} {$this->lastName}<br>";
    }

    private function isEmailCorrect($email) {
        if (strpos($email, '@') === false) {
            return false;
        }
        
        $parts = explode('@', $email);
        $domain = $parts[1];
        
        if (strpos($domain, '.') === false) {
            return false;
        }
        
        $lastDotPosition = strrpos($email, '.');
        $atPosition = strpos($email, '@');
        
        return $lastDotPosition > $atPosition;
    }

    private function correctName($name) {

        $name = strip_tags($name);

        if (strlen($name) > 128) {
            echo "Имя '$name' сокращено до 128 символов<br>";
            $name = substr($name, 0, 128);
        }
        
        return $name;
    }
}

echo "<h3>Создание пользователей</h3>";
$user1 = new User("Марат", "Аргунов", "Marat@gmail.com");
echo "1 Пользователь создан<br>";

$user2 = new User("Лева", "Полуян", "Lewa@gmail.com");
echo "2 Пользователь создан<br>";

$longName = str_repeat("Марат", 20);
$user3 = new User($longName, "Аргунов", "test@gmail.com");

echo "<h3>Изменение данных у пользователя</h3>";

$user1->setFirstName("Марат");
$user1->setEmail("Marat@gmail.com");
echo "Данные 1 пользователя изменены<br>";

$user1->setEmail("некорректный-email"); 

echo "<h3>Вывод информации о пользователях</h3>";

echo "1 Пользователь: " . $user1->getFirstName() . " " . $user1->getLastName() . 
     " (Email: " . $user1->getEmail() . ")<br>";

echo "2 Пользователь: " . $user2->getFirstName() . " " . $user2->getLastName() . 
     " (Email: " . $user2->getEmail() . ")<br>";

echo "3 Пользователь: " . $user3->getFirstName() . " " . $user3->getLastName() . 
     " (Email: " . $user3->getEmail() . ")<br>";

echo "<h3>Использование sayaboutme</h3>";
$user1->sayAboutMe();
$user2->sayAboutMe();

echo "<h3>Тест с html тегами в имени</h3>";
$user4 = new User("<script>Cергей</script>", "<b>Палагин</b>", "Sergey@gmail.com");
echo "Имя после очистки: " . $user4->getFirstName() . " " . $user4->getLastName() . "<br>";
class User1 {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        $this->firstName = $this->correctName($firstName);
        $this->lastName = $this->correctName($lastName);
        
        if (!$this->isEmailCorrect($email)) {
            echo "Ошибка: Некорректный email '$email' при создании пользователя<br>";
        }
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

    public function setFirstName($firstName) {
        $this->firstName = $this->correctName($firstName);
    }

    public function setLastName($lastName) {
        $this->lastName = $this->correctName($lastName);
    }

    public function setEmail($email) {
        if (!$this->isEmailCorrect($email)) {
            echo "Ошибка: Некорректный email '$email'<br>";
        }
        $this->email = $email;
    }

    public function sayAboutMe() {
        echo "Пользователь: {$this->firstName} {$this->lastName}<br>";
    }

    private function isEmailCorrect($email) {
        if (strpos($email, '@') === false) {
            return false;
        }
        
        $parts = explode('@', $email);
        $domain = $parts[1];
        
        if (strpos($domain, '.') === false) {
            return false;
        }
        
        $lastDotPosition = strrpos($email, '.');
        $atPosition = strpos($email, '@');
        
        return $lastDotPosition > $atPosition;
    }

    private function correctName($name) {
        $name = strip_tags($name);

        if (strlen($name) > 128) {
            echo "Имя '$name' сокращено до 128 символов<br>";
            $name = substr($name, 0, 128);
        }
        
        return $name;
    }
}

class Student extends User {
    private $cource;
    private $groupe;

    public function __construct($firstName, $lastName, $email, $cource, $groupe) {

        parent::__construct($firstName, $lastName, $email);
        
        $this->cource = $cource;
        $this->groupe = $groupe;
    }

    public function getCource() {
        return $this->cource;
    }

    public function getGroupe() {
        return $this->groupe;
    }


    public function setCource($cource) {
        $this->cource = $cource;
    }

    public function setGroupe($groupe) {
        $this->groupe = $groupe;
    }

    public function sayAboutMe() {

        parent::sayAboutMe();
        
        echo "Курс: {$this->cource}, Группа: {$this->groupe}<br>";
    }
}

echo "<h3>Создание пользователя и студентов:</h3>";

$user = new User("Марат", "Аргунов", "marat@gmail.com");
echo "Обычный пользователь создан<br><br>";

$student1 = new Student("Лева", "Полуян", "leva@gmail.com", 2, "ИВ1к-24");
echo "Студент 1 создан<br><br>";

$student2 = new Student("Аристарх", "Матросов", "Aristarh@gmail.com", 2, "ИВ1-24-2");
echo "Студент 2 создан<br>";

echo "<h3>Вызов метода sayaboutme:</h3>";

echo "<strong>Обычный пользователь:</strong><br>";
$user->sayAboutMe();
echo "<br>";

echo "<strong>1 Студент :</strong><br>";
$student1->sayAboutMe();
echo "<br>";

echo "<strong>2 Студент:</strong><br>";
$student2->sayAboutMe();

echo "<h3>геттеры и сеттеры класса Student</h3>";

echo "Данные 1 студента до изменений:<br>";
echo "Курс: " . $student1->getCource() . ", Группа: " . $student1->getGroupe() . "<br>";

$student1->setCource(2);
$student1->setGroupe("ИВ1к-24");
$student1->setFirstName("Лев");

echo "Данные 1 студента после изменений:<br>";
echo "Имя: " . $student1->getFirstName() . ", Курс: " . $student1->getCource() . ", Группа: " . $student1->getGroupe() . "<br>";

echo "<h3>Показываю наследование методов:</h3>";

echo "Email 2 студента : " . $student2->getEmail() . "<br>";
echo "Фамилия 2 студента : " . $student2->getLastName() . "<br>";

$student2->setEmail("new.email@gmail.com");
echo "Новый email 2 студента : " . $student2->getEmail() . "<br>";
?>