<?php
function printTask(string $str): void
{
    echo nl2br("\n" . $str . "\n");
}
printTask("Дан текстареа и кнопка. В текстареа вводится текст. По
нажатию на кнопку выведите количество слов и количество
символов в тексте.");

?>
<form action="numberSymbols.php" method="post">
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="submit" value="Отправить">
</form>

<?php
if (!empty($_POST['text'])) {
    $text = $_POST['text'];
    $words = str_word_count($text,0,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    $symbols = strlen($text);
    echo nl2br("\n" . "Количество слов: " . $words . "\n");
    echo nl2br("\n" . "Количество символов: " . $symbols . "\n");
}
?>

<a href="../index.php">Назад</a>

