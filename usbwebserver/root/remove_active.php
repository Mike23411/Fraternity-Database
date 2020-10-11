<?php

include "db_connection.php";

$SID = $_GET["SID"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];

?>
<div id="accordion">
<?php

echo "<h3>Tried to delete user:</h3>";
echo "<div><p>Name: $fname $lname</p>";
echo "<p>Student ID: $SID</p></div>";

?>
</div>
<?php

$sql = "DELETE FROM actives_table WHERE Student_ID=$SID AND F_Name = '$fname' AND L_Name= '$lname'";
$result = $mysqli->query($sql);

include "return_button.php";
?>

