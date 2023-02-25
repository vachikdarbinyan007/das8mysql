<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$connection=mysqli_connect("localhost","root","","mysql8");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $search=$_POST["search"];
    $that=$_POST["select"];
    if(empty($search) || is_numeric($search)){  
        echo "<p style='text-align:center;color:red;'>Enter data</p>";
    }else{
        $sql="SELECT * FROM users WHERE $that LIKE '%$search%'";
        $ard=mysqli_query($connection,$sql);
    };
}else{
    $sql="SELECT * FROM users";
    $ard=mysqli_query($connection,$sql);
};
?>
<header>
        <ul id="menu_ul">
            <li>
                <form action="" method="post">
                <input type="search" name="search" id="search_input">
            </li>
            <li>
                <select name="select" id="select">
                    <option value="first_name">Firstname</option>
                    <option value="last_name">Lastname</option>
                </select>
                <input type="submit" style="height:30px;border-radius:4px;border:none;outline:none;"/>
            </form>
            </li>
        </ul>
    </header>
    <p style="text-align:center;">You want to make Registration? Click <a href="registration.php">here</a>.</p>
    <div id="usersdiv">
    <?php
    if(isset($ard) && mysqli_num_rows($ard)>0 ){
        while($togh=mysqli_fetch_array($ard)){
            include "user.php";
        };
    }else{
        echo "<p style='width:100%;text-align:center;color:red;'>No result</p>";
    };
    ?>
    </div>
</body>
</html>