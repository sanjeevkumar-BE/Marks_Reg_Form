<?php
//fetch data from form
$username=$_POST['name'];
$usermarks=$_POST['marks'];
//db connection
$conn=mysqli_connect('localhost','root','') or die (mysqli_error());
//db select
$select_db=mysqli_select_db($conn,'stud') or die(mysqli_error());
//query
$sql="INSERT INTO stud_1 SET user_name='$username',user_marks='$usermarks'";
//execute query
$result=mysqli_query($conn,$sql) or die(mysqli_error());

if($result==true){
    header('location:index.php');
}
else{
    echo "error";
}
?>