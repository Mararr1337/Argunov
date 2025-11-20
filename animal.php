<?php

class Animal {
    protected $height;
    private $weight = 50;
    public static $humor = 'небольшой';
    
    public function __construct($height = 80, $weight = 50, $type = "Тигр") {
        $this->height = $height;
        $this->weight = $weight;
        $this->type = $type;
    }
    public function say() {
        return 'hrhrhrhrhr';
    }
    
    public function sayHello() {
        echo "Привет! Я $this->type<br>";
        echo 'У меня '. self::$humor . ' юмор!<br>';
    }
    
    public static function getHumor() {
        return self::$humor;
    }
}

class Bird extends Animal {
    public $wingspan;
    
    public function __construct($height, $weight, $type, $wingspan) {
        parent::__construct($height, $weight, $type);
        $this->wingspan = $wingspan;
    }
    
    public function sayHello() {
        parent::sayHello();
        echo "Размах крыльев: $this->wingspan см<br>";
    }
}
class Mammals extends Animal{
        public function sayHello() {
        parent::sayHello();
        echo ", я млекопитающее.";
    }
}

class NotFlyBird extends Bird{
        public function sayHello() {
        parent::sayHello();
        echo ", я не умею летать(: .";
    }
}
$animals=[];
$pinguin= new NotFlyBird(40,50,'Пингвин',100);
$animals[]=$pinguin;
$sparrow = new Bird(15, 50, "Воробей", 200);
$animals[]=$sparrow;
$tiger = new Animal(80, 150, "Тигр");
$animals[]=$tiger;
$monkey = new Mammals (50,40, 'Мартышка');
$animals[]=$monkey;
foreach($animals as $animal){
    $animal->sayHello();
    echo'<br>';
}
?>
