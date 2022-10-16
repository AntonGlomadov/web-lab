<?php
include_once 'database.php';
include_once 'ad.php';
$database = new Database();
$database->connect();
$database->createTable();
?>

<form action="index.php" method="post">
    <label for="titles">Titles</label>
    <input type="text" name="titles" id="titles">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$advertismen = new Advertismen();
if(isset($_POST['submit'])){
    $advertismen->setTitles($_POST['titles']);
    $advertismen->setName($_POST['name']);
    $advertismen->setDescription($_POST['description']);
    $advertismen->setEmail($_POST['email']);
    $database->addAdvertismen($advertismen);
}
?>

<!--- Display data from database in table  with delete button--->
<table>
    <tr>
        <th>Titles</th>
        <th>Name</th>
        <th>Description</th>
        <th>Email</th>
        <th>Delete</th>
    </tr>
    <?php
    $result = $database->getAd();
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['titles']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
            <?php
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $database->deleteAd($id);
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>

