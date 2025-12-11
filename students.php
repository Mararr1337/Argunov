<?php

class User {
    public $name;
    public $email;
    public $type; 
    
    public function __construct($name, $email = "", $type = "user") {
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
    }
    
    public function sayAboutMe() {
        echo "{$this->type}: {$this->name}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
        echo "______________<br>";
    }
}

class Student extends User {
    public $group;
    
    public function __construct($name, $group, $email = "") {
        parent::__construct($name, $email, "студент");
        $this->group = $group;
    }
    
    public function sayAboutMe() {
        echo "Студент: {$this->name}<br>";
        echo "Группа: {$this->group}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
        echo "______________<br>";
    }
}

class Teacher extends User {
    public $subject;
    
    public function __construct($name, $subject, $email = "") {
        parent::__construct($name, $email, "преподаватель");
        $this->subject = $subject;
    }
    
    public function sayAboutMe() {
        echo "Преподаватель: {$this->name}<br>";
        echo "Предмет: {$this->subject}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
        echo "______________<br>";
    }
}

class Manager extends User {
    public $position;
    
    public function __construct($name, $email = "", $position = "администратор") {
        parent::__construct($name, $email, "администратор");
        $this->position = $position;
    }
    
    public function sayAboutMe() {
        echo "Администратор: {$this->name}<br>";
        echo "Должность: {$this->position}<br>";
        echo "Email: {$this->email}<br>";
        echo "______________<br>";
    }
}

echo '<form method="POST">
    <h3>Добавить студента</h3>
    Имя: <input type="text" name="name" required>
    Группа: <input type="text" name="group" required>
    Email: <input type="email" name="email">
    <button type="submit" name="add">Добавить</button>
</form><hr>';

if (isset($_POST['add'])) {

    $data = json_decode(file_get_contents('users1.json'), true);
    
    $newStudent = [
        'Name' => $_POST['name'],
        'Group' => $_POST['group'],
        'Email' => $_POST['email'],
        'type' => 'student'
    ];
    
    $data['users'][] = $newStudent;
    
    file_put_contents('users1.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    
    echo "<p>Студент {$_POST['name']} добавлен в users1.json!</p>";
}

$jsonData = file_get_contents('users1.json');
$usersData = json_decode($jsonData, true);
$allUsers = $usersData['users'];

$allObjects = [];

foreach ($allUsers as $user) {
    if (isset($user['Group'])) {

        $allObjects[] = new Student
        ($user['Name'], $user['Group'], $user['Email'] ?? '');
    } elseif (isset($user['Subject'])) {

        $allObjects[] = new Teacher
        ($user['Name'], $user['Subject'], $user['Email'] ?? '');
    } elseif (isset($user['Position'])) {

        $allObjects[] = new Manager
        ($user['Name'], $user['Email'], $user['Position']);
    } else {

        $allObjects[] = new Manager
        ($user['Name'], $user['Email']);
    }
}

echo "<h3>Все пользователи:</h3>";
array_map(function($obj) { 
    $obj->sayAboutMe(); 
}, $allObjects);

?>