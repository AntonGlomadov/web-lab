<?php
session_start();
if (!empty($_SESSION['userinfo'])) {
    echo nl2br("\n" . "Имя: " . $_SESSION['userinfo']['name'] . "\n");
    echo nl2br("\n" . "Возраст: " . $_SESSION['userinfo']['age'] . "\n");
    echo nl2br("\n" . "Зарплата: " . $_SESSION['userinfo']['salary'] . "\n");
    echo nl2br("\n" . "Стаж: " . $_SESSION['userinfo']['experience'] . "\n");
    echo nl2br("\n" . "Должность: " . $_SESSION['userinfo']['position'] . "\n");
}
else {
    echo nl2br("\n" . "Данные не сохранены" . "\n");
}
?>
<form action="userInfo.php" method="post">
    <input type="submit" value="Вернуться">
</form>
