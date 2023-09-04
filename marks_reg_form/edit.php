<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container1">
        <br>
        <br>
        <?php
        $id=$_GET['id'];
        //db connection
        $conn=mysqli_connect('localhost','root','') or die (mysqli_error());
        //db select
        $select_db=mysqli_select_db($conn,'stud') or die(mysqli_error());

        $sql="SELECT * FROM stud_1 WHERE id=".$id;
        $result=mysqli_query($conn,$sql) or die(mysqli_error());
        if($result==true){
            $row=mysqli_fetch_assoc($result);
            $username=$row['user_name'];
            $marks=$row['user_marks'];
        }
        ?>
        <h1 class="cen">Edit List</h1>
        <div class="login-box">
            <form action="update.php" method="post">
                <div class="log">
            <input type="text" name="name" value="<?php echo $username ;?>"><br><br>
            <input type="text" name="marks" value="<?php echo $marks;?>"><br>
            <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" name="submit" name="submit" value="Edit Data">
            <br>
            <br>
            <a href="view.php">View Data</a>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>