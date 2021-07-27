<?php

$email=$_POST['email'];
$password=$_POST['password'];

//Database connection
$con=new mysqli("localhost","root","","finding_acco");

if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);

}
else{
    $stmt=$con->prepare("Select * from fa_members where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows ==1)
    {
        $data=$stmt_result->fetch_assoc();
        if($data['password']==$password)
        {
            echo "Login Successful";
            header("Location:Welcome.php");
        }
        else{
            echo 'Login Failed. Invalid Email';
            header("Location:login.html");
        }
    }
    else
    {
        echo"<h1>Invalid Email or password</h1>";
    }
}

?>


