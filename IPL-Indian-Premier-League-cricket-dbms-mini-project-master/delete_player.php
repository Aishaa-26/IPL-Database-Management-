<?php
    $con = mysqli_connect("localhost", "root","", "cricket",3307) or die(mysqli_error($con));

    $player=$_POST['playername'];
    $sql="delete from player where playername like '$player'";
    if(mysqli_query($con,$sql)==true){
    $sql1 = "SELECT * from player where playername like'$player'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{   if(mysqli_query($con,$sql))
			{
           $sql1 = "SELECT * from player where playername='$player'";
 
						if(mysqli_query($con,$sql1))
								{
								echo "<script type='text/javascript'>alert('player deleted successfully!!');</script>";
								header("refresh: 0.01; url=admin1st.html");
								echo "<script language='javascript'>";
								}

}


		

else{
	echo "<script language='javascript'>";
	
	echo "alert('PLAYER NOT PRESENT')";
	echo "</script>";
    header("refresh: 0.01; url=admin1st.html");
    
}
		}
mysqli_close($con);
}
?>    
