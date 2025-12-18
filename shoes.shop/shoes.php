<?php
$json = file_get_contents('shoes.json');
$data = json_decode($json, true);
$sneakers = $data['$sneakers'];

$all_categories = [];
foreach ($sneakers as $item) {
    if (!in_array($item['category'], $all_categories)) {
        $all_categories[] = $item['category'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $stock = $_POST['stock'];
    $imageUrl = $_POST['imageUrl'];
    $offer = $_POST['offer'];
    $custom_category = $_POST['custom_category'];
    
    $select_category = isset($_POST['category']) ? $_POST['category'] : '';
    
    if ($custom_category != '') {
        $category = $custom_category;
    } else {
        $category = $select_category;
    }
    
    if (!is_numeric($price)) {
        echo "Ошибка: цена должна быть числом<br>";
    }
    if (!is_numeric($stock)) {
        echo "Ошибка: количество должно быть числом<br>";
    }
    if (is_numeric($price) && is_numeric($stock)) {
        $new_item = [
            'name' => $name,
            'description' => $description,
            'category' => $category,
            'price' => (int)$price,
            'brand' => $brand,
            'imageUrl' => $imageUrl,
            'stock' => (bool)$stock,
            'offer' => $offer
        ];
        $sneakers[] = $new_item;
        $data['$sneakers'] = $sneakers;
        file_put_contents('shoes.json', json_encode($data, JSON_UNESCAPED_UNICODE));
        echo "Товар добавлен!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить товар</title>
</head>
<body>
    <h1>Добавить новый товар</h1>
    <form method="POST">
        <p>Название: <input type="text" name="name" required></p>
        <p>Описание: <textarea name="description" required></textarea></p>
        <p>Цена: <input type="text" name="price" required></p>
        <p>Бренд: <input type="text" name="brand" required></p>
        <p>Количество: <input type="text" name="stock" required></p>
        
        <p>Новая категория: <input type="text" name="custom_category"></p>
        
        <p>Или выберите существующую:
        <select name="category">
            <option value="">Выберите категорию</option>
            <?php
            foreach ($all_categories as $cat) {
                echo "<option value='$cat'>$cat</option>";
            }
            ?>
        </select></p>
        
        <p>Картинка (URL): <input type="text" name="imageUrl"></p>
        <p>Скидка: <input type="text" name="offer"></p>
        <p><input type="submit" value="Добавить товар"></p>
    </form>
</body>
</html>