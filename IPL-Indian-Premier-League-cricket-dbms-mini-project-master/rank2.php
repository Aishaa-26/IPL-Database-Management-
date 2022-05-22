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

<table width="100%"><tr><th>
 <div style="margin-top:10px;" >
 	<table width="100%"><tr><th><p style="align-content: center;"><h1>BATSMAN RANKING</h1></p></th></tr>
	<table align="center">
		<tr>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Runs</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from player  where type='batsman' order by runs desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></th><th>




<table width="100%"><tr style="width: 100%"><th>
<p align="center">
	<h1> BOWLER RANKING
</h1>
</p></th></tr>
		<table align="center">
		<tr>
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>wickets</th>
			
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from player  where type='bowler' order by wickets desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["wickets"]."</th></tr>";
			}
		}?></table></th><th>
		


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
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			
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
	

<table style="vertical-align: text-top;"><tr><th>
	<p align="center" style="width: 100%;padding-right: 100px;"><div >
	<form action="pupdate.php" method="POST">
	ENTER PLAYERNAME    <input type="text" name="name" placeholder="sehwag"><br>
	ENTER RUNS        <input type="number" name="runs" placeholder="211"><br>
	ENTER WICKETS        <input type="number" name="wickets" placeholder="23"><br>
	ENTER NUMBER_OF_MATCHES        <input type="number" name="no_of_matches" placeholder="176"><br>
	
	<button>UPDATE</button></form>
</div></p></th></tr></table></th></tr></table>
	
</body>
</html>