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
<body style="background-color:">
	<button style="background-color: "><a href="AdminrankingBar.html" style="color:">Back</a></button>

	 <div style="margin-top:10px; style : center" ><table width="100%"><tr><th><p style="align-content: center;"><h1 style="color:">TEAM RANKING</h1></p></th></tr><tr><th>
	<table align="center">
		<tr>
			<th>Rank</th>
			<th>Name</th>
			<th>Rating</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		



		$query="select * from team order by rating desc";
		$result=mysqli_query($con,$query);
		[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {

			 $i=$i+1;
			$nm = $row["name"];
			$q="update team set rank='$i' where name='$nm'";
    
    		mysqli_query($con,$q);
			echo "<tr><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}
		}?>
</table></th></tr></table></div>


<table><tr><th>
	<p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center;background-color: ">
	<form action="update.php" method="POST">ENTER TEAM-RATING   <input type="number" name="rating" placeholder="129/130/..." align="right"><br>
	
	ENTER TEAMNAME    <input type="text" name="name" placeholder="RCB" align="padding-right"><br>
	<button>UPDATE</button></form>
</div></p></th></tr></table>


</body>
</html>