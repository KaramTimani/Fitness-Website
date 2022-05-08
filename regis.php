<?php
include('gym.php');
if(isset($_POST['ready'])){
$name=$_POST['Name'];
$age=$_POST['Age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="INSERT INTO newtable(name,age,weight,height,username,password) VALUES('$name','$age','$weight','$height','$user','$pass')";


$result=mysqli_query($conn,$sql);
if($result){
header("location:Exercises.php");
}
}
?>