<?php
class Animal{
    public $weight,$type,$height;
    public  function say(){
        return "grrrrrrr";
    }
    public  function sayHello(){
        echo "Уважайте крутого зверя!";
        echo "Приветствую, я $this->type";
    }
}
$animal = new Animal();
$animal->height = 65;
$animal->weight = 70;
$animal->type = "Тигр";
?>
<p>Вид: <?=$animal -> type?></p>
<p>Рост: <?=$animal -> height?></p>
<p>Вес: <?=$animal -> weight?></p>
<p>Крутой зверь говорит: <?=$animal->say() ?></p>
<p><?php $animal->sayHello();?></p>

<h2>Задание 1</h2>

<?php
class User {
    public $firstName, $lastName, $email;
    public function sayAboutMe() {
        echo "Имя: " . $this->firstName .
        ", Фамилия: " . $this->lastName . "<br>";
    }
}
$user1 = new User();
$user1->firstName = "Лева";
$user1->lastName = "Полуян";
$user1->email = "Lewa@gmail.com";

$user2 = new User();
$user2->firstName = "Марат";
$user2->lastName = "Аргунов";
$user2->email = "marat@gmail.com";
?>
<p><?php $user1->sayAboutMe();?></p>
<p><?php $user2->sayAboutMe();?></p>

<h2>Задание 2</h2>
<?php
class Car{
    public $brand, $model, $type, $color, $weight;
       public function getInfo() {
        echo "Марка: " . $this->brand, "<br>";
        echo "Модель: " . $this->model, "<br>";
        echo "Тип: " . $this->type, "<br>";
        echo "Цвет: " . $this->color, "<br>";
        echo "Вес: " . $this->weight, "<br>";
    }
    public function getWeight() {
        return $this->weight;
    }
}
$car = new Car();
$car->brand ="honda";
$car->model ="civic";
$car->type ="Седан";
$car->color ="Черный";
$car->weight =1300;
?>
<p><?php $car->getInfo();?></p>

<h2>Задание 3</h2>
<?php
class Cars{
    public $brand, $model, $type, $color, $weight, $year, $price;
    
    public function getInfo() {
        echo "Марка: " . $this->brand, "<br>";
        echo "Модель: " . $this->model, "<br>";
        echo "Тип: " . $this->type, "<br>";
        echo "Цвет: " . $this->color, "<br>";
        echo "Вес: " . $this->weight, "<br>";
        echo "Год: " . $this->year, "<br>";
        echo "Цена:" . $this->price, "$<br>";
    }
    
    public function getWeight() {
        return $this->weight;
    }
    
    public function getPrice() {
        return $this->price;
    }
}
$car1 = new Cars();
$car1->brand = "ВАЗ";
$car1->model = "2107";
$car1->type = "Седан";
$car1->color = "Вишня";
$car1->weight = 1100;
$car1->year = 1989;
$car1->price = 77777777;
$car2 = new Cars();
$car2->brand = "Mercedes-Benz";
$car2->model = "sls";
$car2->type = "Спорткар";
$car2->color = "Серебристый";
$car2->weight = 1300;
$car2->year = 2009;
$car2->price = 1200000;

$car3 = new Cars();
$car3->brand = "Jaguar";
$car3->model = "E-Type";
$car3->type = "Спорткар";
$car3->color = "Зеленый";
$car3->weight = 1250;
$car3->year = 1963;
$car3->price = 450000;

$car4 = new Cars();
$car4->brand = "Porsche";
$car4->model = "911 Carrera RS";
$car4->type = "Спорткар";
$car4->color = "Красный";
$car4->weight = 900;
$car4->year = 1975;
$car4->price = 850000;

$car5 = new Cars();
$car5->brand = "Lamborghini";
$car5->model = "Miura P400";
$car5->type = "Спорткар";
$car5->color = "Желтый";
$car5->weight = 1100;
$car5->year = 1970;
$car5->price = 1500000;

$totalPrice = $car1->getPrice() + $car2->getPrice() + $car3->getPrice() + $car4->getPrice() + $car5->getPrice();
?>
<p><?php $car1->getInfo(); ?></p>
<p><?php $car2->getInfo(); ?></p>
<p><?php $car3->getInfo(); ?></p>
<p><?php $car4->getInfo(); ?></p>
<p><?php $car5->getInfo(); ?></p>
<p>Общая стоимость: $<?php echo number_format($totalPrice, 0, '.', ','); ?></p>

<h2>Задание 1 (измененное)</h2>
<?php
class Users {
    public $firstName;
    public $lastName;
    public $email;
    
    public function __construct($firstName, $lastName, $email) {
        $this->firstName = substr($firstName, 0, 128);
        $this->lastName = substr($lastName, 0, 128);
        $this->email = $email;
    }
    public function sayAboutMe() {
        echo $this->firstName . " " . $this->lastName . "<br>";
    }
}
$user1 = new User();
$user1->firstName = "Лева";
$user1->lastName = "Полуян";
$user1->email = "Lewa@gmail.com";

$user2 = new User();
$user2->firstName = "Марат";
$user2->lastName = "Аргунов";
$user2->email = "marat@gmail.com";
?>
<p><?php $user1->sayAboutMe();?></p>
<p><?php $user2->sayAboutMe();?></p>

<h2>Задание 2 (измененное)</h2>
<?php
class Car {
    public function __construct(
        public $brand,
        public $model,
        public $type,
        public $color = "черный",
        public $weight = 0
    ) {}
    
    public function getInfo() {
        return "Марка: " . $this->brand . 
               ", Модель: " . $this->model . 
               ", Тип: " . $this->type . 
               ", Цвет: " . $this->color . 
               ", Вес: " . $this->weight . " кг";
    }
    
    public function getWeight() {
        return $this->weight;
    }
}

$cars = [
    [
        'brand' => 'BMW',
        'model' => 'X5',
        'type' => 'Внедорожник',
        'color' => 'черный',
        'weight' => 2100
    ],
    [
        'brand' => 'Toyota',
        'model' => 'Camry',
        'type' => 'Седан', 
        'color' => 'белый',
        'weight' => 1500
    ],
    [
        'brand' => 'Honda',
        'model' => 'Civic',
        'type' => 'Хэтчбек',
        'color' => 'красный',
        'weight' => 1250
    ],
    [
        'brand' => 'Audi',
        'model' => 'A4',
        'type' => 'Седан',
        'color' => 'серый',
        'weight' => 1450
    ],
    [
        'brand' => 'Mercedes',
        'model' => 'C-Class',
        'type' => 'Седан',
        'color' => 'синий',
        'weight' => 1600
    ]
];

$objCars = [];
foreach ($cars as $car) {
    $objCars[] = new Car(
        $car['brand'],
        $car['model'],
        $car['type'],
        $car['color'],
        $car['weight']
    );
}

foreach ($objCars as $car) {
    $car->getInfo();
}
?>