<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style >
table{
   
border: 2px solid black;
     width:500px;
    height: =500px;
}
tr{
   
border: 2px solid black;
   
}
th{
border: 2px solid black;
     height: 10px;
}
</style>
<head>
<title>AverageRun</title>
</head>
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />
    <button class="back--btn">
        <a href="know.html" style="color:white;">Back</a>
      </button>
<div style="margin-top:225px; style : center" >
<table align="center">
<tr>
<th>Average runs of MI</th>
 

</tr>
<?php

$name = $_POST['name'];
$con=mysqli_connect("localhost","root","","cricket",3307);
$query="SELECT AVG(runs) FROM `player`group by name having name='$name'";
$result=mysqli_query($con,$query);

     
       
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr><th>".$row["AVG(runs)"]."</th><tr>";
                 
           
           
            }
        }

mysqli_close($con);
?>
</table>
</body>
</html>
