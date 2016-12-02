
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>

<?php
$query = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$query .= "ORDER BY position ASC";


$result = mysqli_query($connection, $query);
//Test if there was a query error
if (!$result){
    die("Database query failed.");
}

?>




<?php include("../includes/layouts/header.php"); ?>

<div id="main">
    <div id="navigation">

        <ul>
            <?php
            // Use returnes data if any
            while($subject = mysqli_fetch_assoc($result)) {

                ?>
                <li> <?php echo $subject["menu_name"]; ?></li>
                <?php
            }
            ?>
        </ul>

    </div>
    <div id="page">
        <h2>Manage Content</h2>

    </div>
</div>

<?php
//release returned data
mysqli_free_result($result);
?>

<?php include("../includes/layouts/footer.php"); ?>

<?php
// Close database connection
mysqli_close($connection);
?>
