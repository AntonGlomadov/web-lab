<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['salary']) && !empty($_POST['experience']) && !empty($_POST['position'])) {
    $_SESSION['userinfo'] = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'experience' => $_POST['experience'],
        'position' => $_POST['position']
    );
    echo nl2br("\n" . "Данные сохранены" . "\n");
}
else {
    echo nl2br("\n" . "Введите данные" . "\n");
}
?>
<form action="userInfo.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="age" placeholder="Возраст">
    <input type="text" name="salary" placeholder="Зарплата">
    <input type="text" name="experience" placeholder="Стаж">
    <input type="text" name="position" placeholder="Должность">
    <input type="submit" value="Отправить">
</form>

<form action="showUserInfo.php" method="post">
    <input type="submit" value="Показать информацию">
</form>

<form action="../index.php" method="post">
    <input type="submit" value="Назад">
</form>

