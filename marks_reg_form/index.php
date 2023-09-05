<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student reg</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .header{
            height: 10vh;
            background-color: black;
        }
        .footer{
            height: 10vh;
            background-color: black;
        }
        
    </style>
</head>
<body>
    <div class="container1" style="background-image:url(oi.avif);background-repeat:no-repeat;">
        <div class="header">

        </div>
        
        <h1 class="cen">Students Marks Registration Form</h1>
        <div class="login-box">
            <form action="ok.php" method="post">
                <div class="log">
            <input type="text" name="name" placeholder="Enter Name....." required><br><br>
            <input type="text" name="marks" placeholder="Enter your marks....." required><br>
            <br>
            <input type="submit" name="submit" name="submit" value="Submit">
            <br>
            <br>
            <a href="view.php">View Data</a>
            </div>
            </form>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="footer">
            <p style="color:white; text-align:right; padding:10px;">M.SANJEEVKUMAR B.E., &COPY; 2023</p>
        </div>
    </div>
</body>
</html>