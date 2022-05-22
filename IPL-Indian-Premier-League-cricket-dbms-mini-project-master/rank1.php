<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style >
    table{
        border: 0px solid black;
    }
    tr{
        border: 1px solid black;

    }
    th{
        border: 1px solid black;
        color: black;
    }

		.title-table{
        color: #e0295d;
        font-size: 50px;
  background: #19388a;
  text-align: center;  
    }
.shift-update-up{
	position: relative;
	top: -300px;
}

.updation{
	position:relative;
	left: 550px;
	top: 20px;
}
.btn--update{
	margin-top: 5px;
	padding: 5px 10px;
	color: #fff;
	background-color: #19388a;
	}


</style>
<head>
    <title>RANKS</title>
</head>
 
<body >
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />
    <button class="back--btn">
    <a href="AdminRankingbar.html">Back</a></button>
		<div class="title-table">
Team Ranking
</div>
   
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
<section class="shift-update-up">
<div class="title-table">
Update Table
</div>
<table class="updation"><tr><th>
    <p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center; ">
    <form action="update.php" method="POST">ENTER TEAM-RATING   <input type="number" name="rating" placeholder="13/120/..." align="right"><br><br>
    ENTER TEAMNAME    <input type="text" name="name" placeholder="RCB/CSK/MI/SRH" align="padding-right"><br>
    <button class="btn--update">UPDATE</button></form>
</div></p></th></tr></table>
			</section>
			</div>
</body>
</html>
