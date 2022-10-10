<?php
//show user info saved in session
session_start();
if (!empty($_SESSION['name']) && !empty($_SESSION['surname']) && !empty($_SESSION['age'])) {
    echo nl2br("\n" . "Имя: " . $_SESSION['name'] . "\n");
    echo nl2br("\n" . "Фамилия: " . $_SESSION['surname'] . "\n");
    echo nl2br("\n" . "Возраст: " . $_SESSION['age'] . "\n");
}
else {
    echo nl2br("\n" . "Данные не сохранены" . "\n");
}
?>

<form action="userFormSmall.php" method="post">
    <input type="submit" value="Вернуться">
</form>
