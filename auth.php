<?php
$users = json_decode(file_get_contents('costumer.json'), true)['Users'];

$ausuccess = false;
$userdata = [];

if (isset($_POST['login'])) {
    $inputlog = $_POST['login'];
    $inputpass = $_POST['password'];
    foreach ($users as $user) {
        if ($user['login'] == $inputlog && $user['password'] == $inputpass) {
            $ausuccess = true;
            $userdata = $user;
            break;
        }
    }
}
?>

<?php
if (!$ausuccess) {
    echo '<h2>Вход в магазин</h2>
    <form method="POST">
        Логин: <input type="text" name="login" required><br><br>
        Пароль: <input type="password" name="password" required><br><br>
        <button type="submit">Войти</button>
    </form>';
}
?>

<?php
if (isset($_POST['login']) && !$ausuccess) {
    echo "<p>Неверный логин или пароль.</p>";
}

if ($ausuccess) {
    echo "<h2>Добро пожаловать!</h2>";
    echo $userdata['name'] . "<br>";
    echo "e-mail: " . $userdata['email'] . "<br>";
    echo "сумма на счете: " . $userdata['amount'] . " руб";
}
?>