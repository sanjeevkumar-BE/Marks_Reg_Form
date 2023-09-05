<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','') or die (mysqli_error());
//db select
$select_db=mysqli_select_db($conn,'stud') or die(mysqli_error());

$sql="DELETE FROM stud_1 WHERE id=".$id;

$result=mysqli_query($conn,$sql) or die(mysqli_error());

if($result==true){
    header('location:view.php');
}
else{
    echo "error";
}
?>