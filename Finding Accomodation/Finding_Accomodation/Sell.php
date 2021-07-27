<?php 
$onwer_name=$_POST['Owner-Name'];
$owner_no=$_POST['Own-Phone'];
$cat=$_POST['category'];
$facility=$_POST['facility'];
$style=$_POST['style'];
$size=$_POST['size'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$nearby=$_POST['Nearby'];
$rent=$_POST['rent'];
$PostedOn=date("Y-m-d");
$details=$_POST['description'];

//Database connection
$con=new mysqli("localhost","root","","finding_acco");

if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);

}
else{
	$stmt="INSERT INTO accomodations (Accomodation_Category, Style_type, Size_type, Address, City,State, Nearby,Rent,Owner_Name,Owner_Phone,Posted,Details,Facilities) VALUES ('$cat','$style','$size','$address','$city','$state','$nearby','$rent','$onwer_name','$owner_no','$PostedOn','$details','$facility')";
    /*$stmt->bind_param("sssssssisii",$cat,$style,$size,$address,$city,$state,$nearby,$rent,$onwer_name,$owner_no,$posted);
    $stmt->execute();
    $stmt_result=$stmt->get_result();*/
     $stmt_result=mysqli_query($con,$stmt);
    if($stmt_result)
    {
    	header("Location:Welcome.php");
    }
    else{
    	echo '<script>alert("Registration Failed. ")</script>';
    }
}



?>