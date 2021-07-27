<?php 
$City=$_POST["City"];
$Size=$_POST["Size"];
$Cat=$_POST["Category"];
$price='';
$facility='';
$Style='';
$address='';
$NearBy='';
$PostedOn='';
$Picture='';


//Database connection
$con=new mysqli("localhost","root","","finding_acco");

if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);

}
else
{
	$stmt=$con->prepare("SELECT * FROM accomodations where  Accomodation_Category= ? AND Size_type= ? AND City= ? ");
	$stmt->bind_param('sss',$Cat,$Size,$City);
  
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    $con->close();

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accomodations</title>
	<link rel="stylesheet" type="text/css" href="./Acco1.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
<script type="text/javascript" >
	
function ShowDetails()
	{
		alert("The See More Details PLease Login in first  ");
	}

</script>
</head>
<body>
	<div id="Home-Container">
		<div class="Main-first">
			<div id="logo" class="animate__animated animate__heartBeat animate__infinite"> FA </div>
			<a href="./login.html" ><button id="Login-Signup" class="animate__animated animate__heartBeat animate__infinite">Login</button></a>	
	</div>
	<div id="quote">
		House for rent or buy in <span id="city"><?php  echo "$City";?></span> without brokerage.
	</div>
	<?php if ($stmt_result->num_rows==0) {
    	echo "<h1> No Results Found. Search Again.</h1>";
    	// code...
    }?>
	
	<div id="room-cards">
		
	<table >
		<?php 
$phone=8546957825;
while ($data=$stmt_result->fetch_assoc()) { 
	
?>
	<tr ><td rowspan="5"> <img src="./Images/room.jpg" width="250px"> </td>
		<td><?php echo " $Cat";?></td>
		<td>&#8377; <?php echo $data['Rent'];?></td>
	</tr>
	<tr>
		
		<td ><?php echo "$Size";?></td>
		<td><?php echo $data['Style_type'];?></td>
	</tr>
	<tr>
		
		<td colspan="2"><?php echo $data['Address'];?></td>
	</tr>
	<tr>
		
		
		<td colspan="2"><button type="button" class="details-btn" onclick="ShowDetails()" >Details</button>  </td>
	</tr>
	<tr>
		
		<td>Posted: <?php echo $data['Posted'];?> </td>
	</tr>
	
	<?php 
}
?>
</table>
	
</div>
</div>
</body>
</html>