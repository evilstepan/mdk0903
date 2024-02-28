<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $product_data = "Название товара: $product_name\nОписание: $description\n Категория: $category\nЦена: $price рублей\n\n";

    file_put_contents("products.txt", $product_data, FILE_APPEND);

    echo "Товар успешно добавлен!";
}