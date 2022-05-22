<!DOCTYPE html>
<html>
<style >
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:#F6F9F0;
	}
	th{
		border: 1px solid black;
		color: black;
	}
</style>
<head>
	<title>RANKS</title>
</head>

<table width="100%"><tr style="width: 100%"><th>
<p align="center">
	<h1>ALL-ROUNDER RANKING
</h1>
</p></th></tr>

		<table align="center">
		<tr>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>runs</th>
			<th>wickets</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);

		$query="select * from player  where type='allrounder' order by (runs+wickets*2) desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			echo "<tr><th>".$row["playername"]."</th><th>".	
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th><th>".
			$row["wickets"]."</th></tr>";
			}
		}
	
		mysqli_close($con);
		?>
	</table></th></tr></table></div></th></tr></table>
	
</th></tr></table>
	
</body>
</html>