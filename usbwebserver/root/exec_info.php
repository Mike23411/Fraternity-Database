<?php

include "db_connection.php";

$sql = "SELECT * FROM exec_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	?>
    <div id="accordion">
	<?php

    while($row = $result->fetch_assoc()) {
        //echo "Name: ".$row["F_Name"]." ".$row["L_Name"]." - Student_ID: ".$row["Student_ID"]./*" - Major: ".$row["Major"]." - GPA: ".$row["GPA"]." - Pledge Semester: ".$row["Pledge_Semester"]." - Room_no: ".$row["Room_no"]." - Current Classes: ".$row["Current_Classes"].*/" - Positions: ".$row["Position"]."<br>";

        echo "<h3>Name: $row[F_Name] $row[L_Name]<br/>Student ID: $row[Student_ID]</h3>";
        echo "<div><p>Positions: $row[Position] </p></div>";
    }

    ?>
	</div>
	<?php

} else
    echo "0 results";

include "return_button.php";
?>