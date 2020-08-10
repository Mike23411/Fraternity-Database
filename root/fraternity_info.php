<?php

include "db_connection.php";

$sql = "SELECT * FROM fraternity_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	?>
    <div id="accordion">
	<?php

    while($row = $result->fetch_assoc()) {
        //echo "Fraternity Name: " . $row["Name"]. " - Address: " . $row["Address"]. " - Number of Members: " . $row["Num_Members"]. "<br>";
        echo "<h3>Fraternity: $row[Name]</h3>";
        echo "<div><p>Address: $row[Address]</p>";
        echo "<p>Number of Members: $row[Num_Members]</p></div>";
        //echo "<p>Address: $row["Address"]</p></div>";

    }

    ?>
	</div>
	<?php

} else
    echo "0 results";

include "return_button.php";
?>
