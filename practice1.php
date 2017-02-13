<?php
if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
	$day = $_GET['day'];
	$date = $_GET['date'];
	$year = $_GET['year'];
	if(!empty($day) && !empty($date) && !empty($year))
		echo 'It is '.$day.' '.$date.' '.$year;
	//echo "ok";

else
	echo "Fill all the fields";
}
?>

<form action = "practice1.php" method="GET">
DAY:<br><input type = "text" name="day"><br>
DATE:<br><input type = "text" name="date"><br>
YEAR:<br><input type = "text" name="year"><br>
<br><input type ="submit" value="Submit"><br>
</form>