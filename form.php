<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="tanmay";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{   
     $psw = $_POST['psw'];
     $dob = $_POST['dob'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

     $sql_query = "INSERT INTO register(psw,dob,email,phone)
     VALUES ('$psw','$dob','$email','$phone')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>