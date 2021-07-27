<?php 

$name=$_POST["name"];
$remail=$_POST["remail"];
$rpassword=$_POST["rpass"];
$cpassword=$_POST["cpass"];

//Database connection
$con=new mysqli("localhost","root","","finding_acco");

if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);

}
else{ 
if($cpassword==$rpassword)
    {
        $stmt="INSERT INTO fa_members (username,Email,password) VALUES ('$name','$remail','$rpassword')";
       $result=mysqli_query($con,$stmt);
        if($result){
            header("Location:Welcome.php");  
    }
    else{
        echo '<script>alert("Registration Failed.")</script>';
    }
    }
    else{
        echo '<script>alert("Registration Failed. Both passwords must be same")</script>';
        }
}
?>


