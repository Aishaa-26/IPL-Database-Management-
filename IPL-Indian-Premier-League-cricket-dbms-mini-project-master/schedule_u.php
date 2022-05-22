<!DOCTYPE html>
<html>
<style >
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body>
	<button style="background-color:"><a href="user1st.html" style="color:">Back</a></button>
	 <div style="margin-top:115px; style : center" >
	<table align="center">
		<tr>
			<th>Date</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Match Number</th>
			<th>VENUE</th>
		
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from schedules order by date"  ;
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["date"]."</th><th>".
			$row["team1"]."</th><th>".
			$row["team2"]."</th><th>".
			$row["match_no"]."</th><th>".
			$row["venue"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>

</body>
</html>