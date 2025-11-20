<?php
// class User{
//     private $name;
//     public function __construct($name){
//         $this->name=$name;
//     }
//     public function getName() {
//         return $this->name;
//     }
//         public function setName($newName) {
//             if($newName){
//                 $this->name = $newName;
//                 return true;
//             }
//             return false;
//     }  
// }
// $user1=new User('KTM');
// $user1->setName('LEVA');
?>
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
echo "Пользователь 1 создан<br>";

$user2 = new User("Лева", "Полуян", "Lewa@gmail.com");
echo "Пользователь 2 создан<br>";

$longName = str_repeat("Марат", 20);
$user3 = new User($longName, "Аргунов", "test@gmail.com");

echo "<h3>Изменение данных пользователя</h3>";

$user1->setFirstName("Марат");
$user1->setEmail("Marat@gmail.com");
echo "Данные пользователя 1 изменены<br>";

$user1->setEmail("некорректный-email"); 

echo "<h3>Вывод информации о пользователях</h3>";

echo "Пользователь 1: " . $user1->getFirstName() . " " . $user1->getLastName() . 
     " (Email: " . $user1->getEmail() . ")<br>";

echo "Пользователь 2: " . $user2->getFirstName() . " " . $user2->getLastName() . 
     " (Email: " . $user2->getEmail() . ")<br>";

echo "Пользователь 3: " . $user3->getFirstName() . " " . $user3->getLastName() . 
     " (Email: " . $user3->getEmail() . ")<br>";

echo "<h3>Использование sayAboutMe()</h3>";
$user1->sayAboutMe();
$user2->sayAboutMe();

echo "<h3>Тест с HTML тегами в имени</h3>";
$user4 = new User("<script>Cергей</script>", "<b>Палагин</b>", "test@domain.com");
echo "Имя после очистки: " . $user4->getFirstName() . " " . $user4->getLastName() . "<br>";

?>