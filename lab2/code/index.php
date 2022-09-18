<?php

echo nl2br("Task 1:\n");
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = & $very_bad_unclear_name;
$order = $order . ' , 20 ckiken legs ';
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo nl2br("\n Task 2: \n");
$var = 1;
echo $var;
$var2 = 2;
echo nl2br("\n". $var2);
$doubleVar = 1.2;
echo nl2br("\n" . $doubleVar);
$var12 = 3 + 9;
echo nl2br("\n" . $var12);
$last_month = 1187.23;
$this_month = 1089.98;
echo nl2br("\n" . ($last_month-$this_month));

echo nl2br("\n Task 3:");
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo nl2br("\n" . $days_per_language);

echo nl2br("\n Task 4:");
echo nl2br("\n" . 8 ** 2);

echo nl2br("\n Task 5:");
$my_num = 322;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo nl2br("\n" . $answer);

echo nl2br("\n Task 6:");
$a = 10;
$b = 3;
echo nl2br("\n" . ($a % $b));
$a = 24;
$b = 5;
$diff = $a % $b;
if ($diff === 0) {
    echo nl2br("\n" .'Делится');
} else {
    echo nl2br("\n" .'Делится с остатком ' . $diff);
}
$st = pow(2, 10);
echo nl2br("\n" . $st);
echo nl2br("\n" . sqrt(245));
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += pow($item,2);
}
echo nl2br("\n" . sqrt($sum));
echo nl2br("\n" . round(sqrt(379)) ." " . round(sqrt(379),1) ." ". round(sqrt(379),2));
$asArr = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo '<pre>';
print_r($asArr);
echo '</pre>';
$arr = [4, -2, 5, 19, -130, 0, 10];
echo nl2br("\n" . min($arr));
echo nl2br("\n" . max($arr));
echo nl2br("\n" .rand(1, 100));
$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[$i] = rand();
}
echo '<pre>';
print_r($randArr);
echo '</pre>';
$a = -932;
$b = 832;
echo nl2br("\n" .abs($a - $b));
$absArr = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($absArr); $i++) {
    if ($absArr[$i] < 0)
        $absArr[$i] = -1 * $absArr[$i];
}
echo '<pre>';
print_r($absArr);
echo '</pre>';
$num = 33;
$divArr = [];
for ($i = 1; $i <= ($num); $i++) {
    if ($num % $i === 0)
        $divArr[] = $i;
}
echo '<pre>';
print_r($divArr);
echo '</pre>';
$sumArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum < 10) {
    $sum += $sumArr[$i];
    $i++;
}
echo nl2br("\n"  . $i);

echo nl2br("\nTask 7:");
function printStringReturnNumber(string $i): int
{
    echo nl2br("\n"  .$i);
    return (int)$i;
}

$my_num = printStringReturnNumber('256');
echo nl2br("\n"  . $my_num);

echo nl2br("\nTask 8:");
function increaseEnthusiasm(string $str): string
{
    return $str . '!';
}
echo nl2br("\n"  . increaseEnthusiasm('Hello'));

function repeatThreeTimes(string $str): string
{
    return $str . $str . $str;
}
echo nl2br("\n"  . repeatThreeTimes('Hello'));

echo nl2br("\n"  . increaseEnthusiasm(repeatThreeTimes('Hello')));

function cut(string $str, int $num = 10): string
{
    return substr($str, 0, $num);
}

function printArr(array $arr, int $i = 0): void
{
    if ($i < count($arr)) {
        echo nl2br("\n"  . $arr[$i]);
        printArr($arr, $i + 1);
    }
}

function sumOfDigits(int $num): int
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    if ($sum > 9)
        return sumOfDigits($sum);
    return $sum;
}

echo nl2br("Task 9:\n");//также задача 19
$arr = []; 
for ($i = 0; $i < 20; $i++) {
    $arr[$i] = '';
    for ($j = 0; $j <= $i; $j++) {
        $arr[$i] .= 'x';
    }
}
printArr($arr);

function arrayFill(string $str, int $num): array
{
    $arr = [];
    for ($i = 0; $i < $num; $i++) {
        $arr[$i] = $str;
    }
    return $arr;
}
printArr(arrayFill('x', 5));

function sumOfArr(array $arr): int
{
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item))
            $sum += sumOfArr($item);
        else
            $sum += $item;
    }
    return $sum;
}
$arr = [[1, 2, 3], [4, 5], [6, 7, 8, 9]];
echo nl2br("\n"  . sumOfArr($arr));

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $i * 3 + $j + 1;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo nl2br("\n"  . $result);

$user = ['name' => 'Ivan', 'surname' => 'Ivanov', 'patronymic' => 'Ivanovich'];
echo nl2br("\n"  . $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']);

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo nl2br("\n"  . $date['year'] . '-' . $date['month'] . '-' . $date['day']);

$arr = ['a', 'b', 'c', 'd', 'e'];
 echo nl2br("\n"  . count($arr));
echo nl2br("\n"  . $arr[count($arr) - 1]);
echo nl2br("\n"  . $arr[count($arr) - 2]);

function sumOfTwo(int $a, int $b): bool
{
    return $a + $b > 10;
}

function isEqual(int $a, int $b): bool
{
    return $a === $b;
}

echo $test == 0 ? 'верно' : 'неверно';

$age = 99;
if ($age < 10 || $age > 99)
    echo nl2br("\n"  . 'The number is less than 10 or greater than 99');
else {
    $sum = 0;
    while ($age > 0) {
        $sum += $age % 10;
        $age = (int)($age / 10);
    }
    if ($sum <= 9)
        echo nl2br("\n"  . 'The sum of the digits is single digit');
    else
        echo nl2br("\n"  . 'The sum of the digits is two digit');
}

$arr = [1, 2, 3];
if (count($arr) === 3)
    echo nl2br("\n"  . array_sum($arr));