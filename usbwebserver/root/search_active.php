<?php

include "db_connection.php";

$SID = $_GET["ID"];
$fname = $_GET["fname"];
//$lname = $_GET["lname"];

//echo "<h3>Showing everyone named $key</h3>";

if ($SID >= 10000000 AND $SID <= 99999999){
	$sql = "SELECT * FROM actives_table WHERE Student_ID = $SID AND F_Name LIKE '%".$fname."%' ORDER BY F_Name";
	$result = $mysqli->query($sql);
}else{
	$sql = "SELECT * FROM actives_table WHERE F_Name LIKE '%".$fname."%' ORDER BY F_Name";
	$result = $mysqli->query($sql);
}

if ($result->num_rows >= 0) {
	// output data of each row
	
	?>
    <div id="accordion">
	<?php

    while($row = $result->fetch_assoc()) {
        //echo "Name: " . $row["F_Name"]. " " . $row["L_Name"]. " - Student_ID: " . $row["Student_ID"] . "<br>";
    	echo "<h3>Name: $row[F_Name] $row[L_Name]<br/>Student ID: $row[Student_ID]</h3>";
    	echo "<div><p>Major: $row[Major] </p>";
    	echo "<p>GPA: $row[GPA] </p>";
    	echo "<p>Pledge_Semester: $row[Pledge_Semester] </p>";
    	echo "<p>Room: $row[Room_no] </p>";
    	echo "<p>CurrentClasses: $row[Current_Classes] </p>";
    	echo "<p>Positions: $row[Positions] </p></div>";

    }

    ?>
	</div>
	<?php

} else
    echo "0 results";

?>


<form class="form-horizontal" action="index.php">
<fieldset>

<!-- Button -->
<div class="form-group">
  <label class="col-md-0 control-label" for="Return to main page"></label>
  <div class="col-md-1">
    <button id="Return to main page" name="Return to main page" class="btn btn-primary">Return to main page</button>
  </div>
</div>

</fieldset>
</form>


<!--
echo "Name: ".$row["F_Name"]." ".$row["L_Name"]." - Student_ID: ".$row["Student_ID"]." - Major: ".$row["Major"]." - GPA: ".$row["GPA"]." - Pledge Semester: ".$row["Pledge_Semester"]." - Room_no: ".$row["Room_no"]." - Current Classes: ".$row["Current_Classes"]." - Positions: ".$row["Positions"]."<br>";
-->