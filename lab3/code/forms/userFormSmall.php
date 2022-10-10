<?php
//с помощью формы спросите упользователя фамилию, имя и возраст. Запишите эти данные в сессию 

session_start();
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['age'] = $_POST['age'];
    echo nl2br("\n" . "Данные сохранены" . "\n");
}
else {
    echo nl2br("\n" . "Введите данные" . "\n");
}
?>
<form action="userFormSmall.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="age" placeholder="Возраст">
    <input type="submit" value="Отправить">
</form>

<form action="showUserInfoSmall.php" method="post">
    <input type="submit" value="Показать информацию">
</form>

<form action="../index.php" method="post">
    <input type="submit" value="Назад">
</form>


