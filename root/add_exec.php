<?php

include "db_connection.php";

$ID = $_GET["ID"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$pos = $_GET["pos"];


$sql = "INSERT INTO exec_table VALUES ('$ID', '$fname', '$lname', '$pos')";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

?>
<div id="accordion">
<?php
echo "<h3>Tried to add:</h3>";
echo "<div><p>Name: $fname $lname</p>";
echo "<p>Student ID: $ID</p>";
echo "<p>Positions: $pos </p></div>";

?>
</div>

<?php
include "return_button.php";
?>




