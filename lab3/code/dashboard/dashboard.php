<html>
<head>
    <style>
        table
        {
            border-style:solid;
            border-width:2px;
            border-color:pink;
        }
    </style>
</head>
<?php
if (!file_exists('./data')) {
    mkdir('./data', 0777, true);
}
?>
<h1> Создание категории</h1>
<form action="dashboard.php" method="post">
    <input type="text" name="category" placeholder="Название категории">
    <input type="submit" value="Добавить">
</form>
<?php
if (!empty($_POST['category'])) {
    $category = $_POST['category'];
    $path = "./data/" . $category;
    if (!file_exists($path)) {
        mkdir($path);
        echo nl2br("\n" . "Категория добавлена" . "\n");
    }
    else {
        echo nl2br("\n" . "Категория уже существует" . "\n");
    }
}
else {
    echo nl2br("\n" . "Введите название категории" . "\n");
}
?>
<h1>Форма создания объявления</h1>
<form action="dashboard.php" method="post">
    <input type="text" name="title" placeholder="Заголовок объявления">
    <textarea name="text" cols="30" rows="10" placeholder="Текст объявления"></textarea>
    <input type="text" name="email" placeholder="Email">
    <select name="category">
        <?php
        $dir = "./data/";
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<option value='$file'>$file</option>";
            }
        }
        ?>
    </select>
    <input type="submit" value="Добавить">
</form>
<?php

if (!empty($_POST['category']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['email'])) {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $email = $_POST['email'];
    $path = "./data/" . $category . "/" . $title . ".txt";
    if (!file_exists($path)) {
        $file = fopen($path, "w");
        fwrite($file, $text . "\n" . $email);
        fclose($file);
        echo nl2br("\n" . "Объявление добавлено" . "\n");
    }
    else {
        echo nl2br("\n" . "Объявление уже существует" . "\n");
    }
}
else {
    echo nl2br("\n" . "Введите данные" . "\n");
}
?>
<h1>Список объявлений</h1>

<table border='1'>
    <tr>
        <th>title</th>
        <th>description</th>
        <th>category</th>
    </tr>
<?php
$dir = "./data/";
$files = scandir($dir);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $path = "./data/" . $file;
        $files2 = scandir($path);
        foreach ($files2 as $file2) {
            if ($file2 != "." && $file2 != "..") {
                $path2 = "./data/" . $file . "/" . $file2;
                $file3 = fopen($path2, "r");
                $text = fgets($file3);
                $email = fgets($file3);
                fclose($file3);
                echo "<tr>";
                echo "<td>" . $file2 . "</td>";
                echo "<td>" . $text . "</td>";
                echo "<td>" . $file . "</td>";
                echo "</tr>";
            }
        }
    }
}
?>
</table>
<form action="../index.php" method="post">
    <input type="submit" value="Назад">
</form>
</html>
