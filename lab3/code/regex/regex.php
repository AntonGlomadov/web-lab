<?php
function printTask(string $str): void
{
    echo nl2br("\n" . $str . "\n");
}
printTask("Напишите регулярку, которая найдет строки 'abba', 'adca',
'abea' по шаблону: буква 'a', два любых символа, буква 'b'.");

echo '<form action="regex.php" method="post">
    <input type="text" name="str">
    <input type="submit" value="Отправить">
</form>';

if (!empty($_POST['str'])) {
    $str = $_POST['str'];
    $pattern = '/a..b/';
    preg_match_all($pattern, $str, $matches);
    if (count($matches[0]) > 0) {
        echo nl2br("\n" . "Совпадения найдены:\n");
        foreach ($matches[0] as $match) {
            echo nl2br("\n" . $match);
        }
    } else {
        echo nl2br("\n" . "Совпадения не найдены");
    }
}

echo nl2br("\n" . "----------------------------------------" . "\n");
printTask("Дана строка с целыми числами 'a1b2c3'. С помощью
регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы.");

echo '<form action="regex.php" method="post">
    <input type="text" name="numstr">
    <input type="submit" value="Отправить">
</form>';


if (!empty($_POST['numstr'])) {
    $str = $_POST['numstr'];
    $pattern = '/(\d+)/';
    $str = preg_replace_callback($pattern, function ($matches) {
        return $matches[0] ** 3;
    }, $str);
    echo nl2br("\n" . $str);
}

?>
<a href="../index.php">Назад</a>
