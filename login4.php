<?php
include 'gym.php';
if(isset($_POST['login'])){
$username1=$_POST['UserName'];
$password1=$_POST['Password'];
$sql1="SELECT * FROM newtable WHERE username='$username1' AND password='$password1' ";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
header("location:Exercises.php");
echo "logged in";
}
else{
echo "incorrect username or password" ;
}

}

?>