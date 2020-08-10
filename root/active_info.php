<?php

include "db_connection.php";

$sql = "SELECT * FROM actives_table ORDER BY F_Name";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    ?>
    <div id="accordion">
	<?php

	//echo "<p>Trying to add: SID: $ID Name: $fname $lname </p>";
	$i = 0;
    while($row = $result->fetch_assoc()) {
        //echo "Name: ".$row["F_Name"]." ".$row["L_Name"]." - Student_ID: ".$row["Student_ID"]." - Major: ".$row["Major"]." - GPA: ".$row["GPA"]." - Pledge Semester: ".$row["Pledge_Semester"]." - Room_no: ".$row["Room_no"]." - Current Classes: ".$row["Current_Classes"]." - Positions: ".$row["Positions"]."<br>";
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


include "return_button.php";
?>





