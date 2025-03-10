<?php
$server="localhost";
$user="root";
$password="";
$db_name="formdb";

$conn=mysqli_connect($server,$user,$password,$db_name);
if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $sql="insert into details (NAME,AGE,CITY) values ('$name','$age','$city')";
    if($conn->query($sql)){
        echo "values inserted sucessfully";
    }
    else{
        echo "Failed";
    }
}
?>