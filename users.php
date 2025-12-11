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
    }
}

class Teacher extends User {
    public $subjects;
    
    public function __construct($name, $subjects, $email = "") {
        parent::__construct($name, $email, "преподователь");
        $this->subjects = $subjects;
    }
    
    public function sayAboutMe() {
        echo "Преподователь: {$this->name}<br>";
        echo "Предметы: {$this->subjects}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
    }
}

class Manager extends User {
    public $group;
    
    public function __construct($name, $position, $email = "") {
        parent::__construct($name, $email, "менеджер");
        $this->position = $position;
    }
    
    public function sayAboutMe() {
        echo "Студент: {$this->name}<br>";
        echo "должность: {$this->position}<br>";
        if (!empty($this->email)) {
            echo "Email: {$this->email}<br>";
        }
    }
}
if (isset($_GET['delete'])) {
    try {
        $index = $_GET['delete']; 
        $fileContent = file_get_contents('users1.json');
        if ($fileContent === false) {
            throw new Exception("Файл с данными 'users1.json' не найден");
        }
        
        $data = json_decode($fileContent, true);
        if ($data === null) {
            throw new Exception("Файл с данными 'users1.json' поврежден");
        }
        
        unset($data['users'][$index]);
        
        file_put_contents('users1.json', json_encode($data));
        
        echo "Пользователь удален<br><br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br><br>";
    }
}

echo '<form method="POST">
    <h3>Добавить студента</h3>
    Имя: <input type="text" name="name">
    Группа: <input type="text" name="group">
    Email: <input type="email" name="email">
    <button type="submit" name="add">Добавить</button>
</form><hr>';

if (isset($_POST['add'])) {
    try {
        $fileContent = file_get_contents('users1.json');
        if ($fileContent === false) {
            throw new Exception("Файл с данными 'users1.json' не найден");
        }
        
        $data = json_decode($fileContent, true);
        if ($data === null) {
            throw new Exception("Файл с данными 'users1.json' поврежден");
        }
        
        $data['users'][] = [
            'Name' => $_POST['name'],
            'Group' => $_POST['group'],
            'Email' => $_POST['email']
        ];
        
        file_put_contents('users1.json', json_encode($data));
        echo "Студент {$_POST['name']} добавлен<br><br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br><br>";
    }
}

try {

    $fileContent = file_get_contents('users1.json');
    if ($fileContent === false) {
        throw new Exception("Файл с данными 'users1.json' не найден");
    }
    
    $data = json_decode($fileContent, true);
    if ($data == null) {
        throw new Exception("Файл с данными 'users1.json' поврежден");
    }
    
    echo "<h3>Все пользователи:</h3>";
    
    foreach ($data['users'] as $index => $user) {
        $student = new Student($user['Name'], $user['Group'], $user['Email']);
        $student->sayAboutMe();
        
        echo "<a href='?delete=$index'>Удалить</a>",'<br>';
    }
} catch (Exception $e) {
    echo $e->getMessage() . "<br><br>";
}
?>