<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <h1 class="cen">Mark List</h1>
        <table>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>marks</th>
                <th>Actions</th>
            </tr>
            <?php
            $conn=mysqli_connect('localhost','root','') or die (mysqli_error());
            //db select
            $select_db=mysqli_select_db($conn,'stud') or die(mysqli_error());
            $sql="SELECT * FROM stud_1";
            $result=mysqli_query($conn,$sql) or die(mysqli_error());
            $count=1;
            if($result==true){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $username=$row['user_name'];
                    $usermarks=$row['user_marks'];
                    ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo $usermarks;?></td>
                        <td><a href="edit.php?id=<?php echo $id; ?>"><input type="button" value="Edit" class="btn-pri"></a><a href="delete.php?id=<?php echo $id;?>"><input type="button" value="Delete" class="btn-d"></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <a href="index.php">Go Back</a><br>
        
    </div>
</body>
</html>