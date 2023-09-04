<?php
$id=$_POST['id'];
$username=$_POST['name'];
$marks=$_POST['marks'];

$conn=mysqli_connect('localhost','root','') or die (mysqli_error());
//db select
$select_db=mysqli_select_db($conn,'stud') or die(mysqli_error());

$sql="UPDATE stud_1 SET user_name='$username',user_marks='$marks' WHERE id='$id'";

$result=mysqli_query($conn,$sql) or die(mysqli_error());

if($result==true){
    header('location:view.php');
}

?>