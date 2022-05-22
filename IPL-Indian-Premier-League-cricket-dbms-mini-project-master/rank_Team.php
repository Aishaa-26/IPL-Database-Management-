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
	<button style="background-color: "><a href="Rankingbar.html" style="color:">Back</a></button>

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
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			
			//if($rate!=floor($i))
			//	{$q="update team set rank='floor($i)' where rating='$rating'";
    		//	mysqli_query($con,$q);
			

			echo "<tr><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}}
		?>
</table></th></tr></table></div>