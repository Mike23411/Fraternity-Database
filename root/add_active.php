<?php

include "db_connection.php";

$ID = $_GET["ID"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$major = $_GET["major"];
$gpa = $_GET["gpa"];
$psem = $_GET["psem"];
$room = $_GET["room"];
$cclass = $_GET["cclass"];
$pos = $_GET["pos"];


$sql = "INSERT INTO actives_table VALUES ('$ID', '$fname', '$lname', '$major', '$gpa', '$psem', '$room', '$cclass', '$pos')";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

?>
<div id="accordion">
<?php
echo "<h3>Tried to add:</h3>";
echo "<div><p>Name: $fname $lname</p>";
echo "<p>Student ID: $ID</p>";
echo "<p>Major: $major </p>";
echo "<p>GPA: $gpa </p>";
echo "<p>Pledge_Semester: $psem </p>";
echo "<p>Room: $room </p>";
echo "<p>CurrentClasses: $cclass </p>";
echo "<p>Positions: $pos </p></div>";

?>
</div>

<?php
include "return_button.php";
?>




