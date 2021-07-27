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


    /*if($stmt_result->num_rows >0)
    {
        $data=$stmt_result->fetch_assoc();
        $Style=$data['Style_type'];
        $address=$data['Address'];
        $facility=$data['Facilities'];
        $price=$data['Rent'];
        $NearBy=$data['Nearby'];
        $PostedOn=$data['Posted'];
        $Picure=$data['Pictures'];
    }
    elseif ($stmt_result->num_rows==0) {
    	echo "<h1> No Results Found. Search Again.</h1>";
    	// code...
    }*/
}


?>

<!-- SELECT * FROM `accomodations` WHERE (Size_type='1 BHK'AND City='Dehradun') AND Accomodation_Category='PG'; -->



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accomodations</title>
	<link rel="stylesheet" type="text/css" href="./Acco.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<script type="text/javascript" src="./name.js"></script>

</head>
<body>

	<div id="Home-Container">
		<div class="Main-first">
			<div id="logo"> FA </div>	
			
	</div>
	<div id="quote">
		House for rent or buy in <span id="city"><?php echo "$City";?> </span> without brokerage.
	</div>
	<?php if ($stmt_result->num_rows==0) {
    	echo "<h1> No Results Found. Search Again.</h1>";
    	// code...
    }?>
	<!--<div id="Sort-Filters"> 
		<button id="sort">
			
			Sort
		</button>
		<button id="filter">
			
			Filter
		</button>
	</div>-->
	
	<div id="room-cards">
		
	<table border="0px"  >
<?php 

while ($data=$stmt_result->fetch_assoc()) { 
	
?>
	<tr ><td rowspan="6"> <img src="./Images/room.jpg" width="400px" height="400px"> </td>
                <td class="Category"><?php echo " $Cat";?></td>
                <td class="price">&#8377; <?php echo $data['Rent'];?></td>
                <td rowspan="6" id="details">Lorem ipsum dolor sit amet. Id nulla error et explicabo voluptatem qui nihil consequatur et tempore porro qui odit. Et labore omnis eum dolores exercitationem aut dolor magni et dolorem reprehenderit eligendi aperiam est voluptatem alias et repellat galisum. Eos rerum galisum ut error consequatur non sequi excepturi non rerum labore. Ut veritatis exercitationem ut tenetur iste qui perferendis consequatur ut aperiam molestiae sed voluptas earum eos explicabo rerum qui iusto omnis. </td>
            </tr>
            <tr>
                <td class="Size"><?php echo "$Size";?></td>
                <td class="Type"><?php echo $data['Style_type'];?></td>
            </tr>
            <tr>
                
                <td colspan="2" id="address"><?php echo $data['Address'];?></td>
            </tr>
            <tr>
                
                <td colspan="2"  id="Nearby"><?php echo $data['Nearby'];?></td>
            </tr>
            <tr>
                
                <td colspan="2" class="Facility"><?php echo $data['Facilities'];?></td>
            </tr>
            
            <tr>
                <td class ="post">Posted: <?php echo $data['Posted'];?> </td>
                 <td class="Phone-no">Contact Owner: </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>

	<?php
}
?>
</table>
	
</div>

</div>

</body>
</html>