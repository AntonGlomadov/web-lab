<?php

require_once "vendor/autoload.php";

$client = new Google_Client();
$client->setApplicationName('Google Sheets');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig('credentials.json');
$service = new Google_Service_Sheets($client);
$id = "1nhTM7yVbap99RVYYFJyfcW7PsXrDXA-ojQMOuEmOmOA";


$range = "data!A1:D1";
$valueRange = new Google_Service_Sheets_ValueRange();
$valueRange->setValues(["values" => ["title", "name", "description", "email"]]);
$params = ["valueInputOption" => "RAW"];
$service->spreadsheets_values->update($id, $range, $valueRange, $params);
?>

<form action='index.php' method='post'>
    <input type='text' name='title' placeholder='title'>
    <input type='submit' name='submit' value='submit'>
</form>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $range = "titles!A1";
    $valueRange = new Google_Service_Sheets_ValueRange([
        'values' => [[$title]]
    ]);
    $conf = ['valueInputOption' => 'RAW'];
    $service->spreadsheets_values->append($id, $range, $valueRange, $conf);
}
?>

<form action='index.php' method='post'>
    <select name='title'>
        <?php
        $range = "titles!A2:A";
        $response = $service->spreadsheets_values->get($id, $range);
        $values = $response->getValues();
        if (count($values) == 0) {
            echo "No data found.";
        } else {
            foreach ($values as $row) {
                echo "<option value='$row[0]'>$row[0]</option>";
            }
        }
        ?>
    </select>
    <input type='text' name='name' placeholder='name'>
    <input type='text' name='description' placeholder='description'>
    <input type='text' name='email' placeholder='email'>
    <input type='submit' value='Submit'>
</form>

<?php
if(isset($_POST['name'])){
    $title = $_POST['title'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $range = "data!A2:D";
    $response = $service->spreadsheets_values->get($id, $range);
    $values = $response->getValues();
    $row = count($values) + 1;
    $range = "data!A$row:D$row";
    $valueRange = new Google_Service_Sheets_ValueRange([
        'values' => [[$title, $name, $description, $email]]
    ]);
    $conf = ['valueInputOption' => 'RAW'];
    $service->spreadsheets_values->append($id, $range, $valueRange, $conf);
}
?>

<?php
$range = "data!A2:D";
$response = $service->spreadsheets_values->get($id, $range);
$values = $response->getValues();
if (count($values) == 0) {
    echo "No data found.";
} else {
    echo "<table>";
    foreach ($values as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
