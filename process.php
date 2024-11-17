<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из POST
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $color = $_POST['color'] ?? '';

    // Создание JSON-ответа
    $response = [
        'name' => htmlspecialchars($name),
        'age' => (int)$age,
        'gender' => htmlspecialchars($gender),
        'color' => htmlspecialchars($color),
    ];

    // Установка заголовка и отправка ответа
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Отправляем 404 при любом другом методе
    http_response_code(404);
    echo json_encode(['error' => 'Метод не поддерживается']);
}
?>
