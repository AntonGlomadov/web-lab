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