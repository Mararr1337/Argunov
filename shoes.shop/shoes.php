<?php
$json = file_get_contents('shoes.json');
$data = json_decode($json, true);


$shoes = $data['$sneakers'];

$categories = [];
foreach ($shoes as $product) {
    $category = $product['category'];
    if (!isset($categories[$category])) {
        $categories[$category] = [];
    }
    $categories[$category][] = $product;
}

echo "<h1>Товары по категориям</h1>";

foreach ($categories as $category => $products) {
    echo "<h2>Категория: $category</h2>";
    echo "<div style='display: flex; flex-wrap: wrap; gap: 20px;'>";
    
    foreach ($products as $product) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; width: 200px;'>";
        echo "<h3>" . $product['name'] . "</h3>";
        echo "<p><strong>Описание:</strong> " . $product['description'] . "</p>";
        echo "<p><strong>Цена:</strong> " . number_format($product['price'], 0, '', ' ') . " руб.</p>";
        echo "<p><strong>Бренд:</strong> " . $product['brand'] . "</p>";
        
        $stockText = $product['stock'] ? "В наличии" : "Нет в наличии";
        $stockColor = $product['stock'] ? "green" : "red";
        echo "<p><strong>Наличие:</strong> <span style='color: $stockColor;'>$stockText</span></p>";
        
        if (!empty($product['offer'])) {
            echo "<p><strong>Акция:</strong> " . $product['offer'] . "</p>";
        }
        echo "</div>";
    }
    echo "</div><hr>";
}
?>