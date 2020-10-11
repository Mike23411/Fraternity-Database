<html>
<head>

</head>

<body>
	<h1>AK PIKE's</h1><br/>
<?php

include "db_connection.php";
//include "fraternity_info.php";
//include "active_info.php";
//include "exec_info.php"

//echo "<br>"

?>


<!-- Begin Fraternity Button Form -->

<form class="form-horizontal" action = "fraternity_info.php">
<fieldset>

<!-- Form Name -->
<legend>Display Fraternity Information</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-0 control-label" for="Fraternity_information"></label>
  <div class="col-md-1">
    <button id="Fraternity_information" name="Fraternity_information" class="btn btn-primary">Fraternity Info</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Fraternity Button Form -->

<!-- Begin Exec Button Form -->

<form class="form-horizontal" action="exec_info.php">
<fieldset>

<!-- Form Name -->
<legend>Display Executive Members</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-0 control-label" for="Executive_information"></label>
  <div class="col-md-1">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Current Executives</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Exec Button Form -->

<!-- Begin Exec Add Form -->

<form class="form-horizontal" action = "add_exec.php">
<fieldset>

<!-- Form Name -->
<legend>Add an Executive Memeber</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="ID">Student ID:</label>  
  <div class="col-md-2">
  <input id="ID" name="ID" type="text" placeholder="e.g. 01234567" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="fname">First Name:</label>  
  <div class="col-md-2">
  <input id="fname" name="fname" type="text" placeholder="e.g. Alex" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="lname">Last Name:</label>  
  <div class="col-md-2">
  <input id="lname" name="lname" type="text" placeholder="e.g. Fischer" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="pos">Current Position:</label>  
  <div class="col-md-2">
  <input id="pos" name="pos" type="text" placeholder="e.g. President" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="Submit"></label>
  <div class="col-md-2">
    <button id="Submit" name="Submit" class="btn btn-primary">Add</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Exec Add Form -->

<!-- Begin Removing Exec input-->

<form class="form-horizontal" action = "remove_exec.php">
<fieldset>

<!-- Form Name -->
<legend>Remove an Executive</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="SID">Student ID:</label>  
  <div class="col-md-2">
  <input id="SID" name="SID" type="text" placeholder="e.g. 01234567" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="fname">First Name:</label>  
  <div class="col-md-2">
  <input id="fname" name="fname" type="text" placeholder="e.g. Alex" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="lname">Last Name:</label>  
  <div class="col-md-2">
  <input id="lname" name="lname" type="text" placeholder="e.g. Fischer" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="Submit"></label>
  <div class="col-md-2">
    <button id="Submit" name="Submit" class="btn btn-primary">Remove</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Removing Exec input-->








<!-- Begin Active Button Form -->

<form class="form-horizontal" action = "active_info.php">
<fieldset>

<!-- Form Name -->
<legend>Display Current Actives</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-0 control-label" for="Acitves"></label>
  <div class="col-md-1">
    <button id="Acitves" name="Acitves" class="btn btn-primary">Current Actives</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Button Form -->


<!-- Begin Search Form -->

<form class="form-horizontal"  action = "search_active.php">
<fieldset>

<!-- Form Name -->
<legend>Search for an Active</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="ID">Student ID:</label>
  <div class="col-md-2">
    <input id="ID" name="ID" type="search" placeholder="e.g. 01234567" class="form-control input-md">
    
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="fname">First Name:</label>
  <div class="col-md-2">
    <input id="fname" name="fname" type="search" placeholder="e.g. Alex" class="form-control input-md">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="Submit"></label>
  <div class="col-md-2">
    <button id="Submit" name="Submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Search input-->

<!-- Begin Adding Active input-->

<form class="form-horizontal" action = "add_active.php">
<fieldset>

<!-- Form Name -->
<legend>Add an Active</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="ID">Student ID:</label>  
  <div class="col-md-2">
  <input id="ID" name="ID" type="text" placeholder="e.g. 01234567" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="fname">First Name:</label>  
  <div class="col-md-2">
  <input id="fname" name="fname" type="text" placeholder="e.g. Alex" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="lname">Last Name:</label>  
  <div class="col-md-2">
  <input id="lname" name="lname" type="text" placeholder="e.g. Fischer" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="major">Major:</label>  
  <div class="col-md-2">
  <input id="major" name="major" type="text" placeholder="e.g. Computer Science" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="gpa">Current GPA:</label>  
  <div class="col-md-2">
  <input id="gpa" name="gpa" type="text" placeholder="e.g. 4.0" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="psem">Pledge Semester:</label>  
  <div class="col-md-2">
  <input id="psem" name="psem" type="text" placeholder="e.g. F2K19" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="room">Room #:</label>  
  <div class="col-md-2">
  <input id="room" name="room" type="text" placeholder="e.g. 1" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="cclass">Current Classes</label>  
  <div class="col-md-2">
  <input id="cclass" name="cclass" type="text" placeholder="e.g. CS1570, EE2100" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="pos">Current Position:</label>  
  <div class="col-md-2">
  <input id="pos" name="pos" type="text" placeholder="e.g. President" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="Submit"></label>
  <div class="col-md-2">
    <button id="Submit" name="Submit" class="btn btn-primary">Add</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Adding Active input-->

<!-- Begin Removing Active input-->

<form class="form-horizontal" action = "remove_active.php">
<fieldset>

<!-- Form Name -->
<legend>Remove an Active</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="SID">Student ID:</label>  
  <div class="col-md-2">
  <input id="SID" name="SID" type="text" placeholder="e.g. 01234567" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="fname">First Name:</label>  
  <div class="col-md-2">
  <input id="fname" name="fname" type="text" placeholder="e.g. Alex" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="lname">Last Name:</label>  
  <div class="col-md-2">
  <input id="lname" name="lname" type="text" placeholder="e.g. Fischer" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="Submit"></label>
  <div class="col-md-2">
    <button id="Submit" name="Submit" class="btn btn-primary">Remove</button>
  </div>
</div>

</fieldset>
</form>

<!-- End Removing Active input-->



<?php

//include "add_active.php";

$mysqli->close();

?>

</body>

</html>
