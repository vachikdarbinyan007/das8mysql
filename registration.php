<?php
require "config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST["first_name"];
    $lastname=$_POST["last_name"];
    $age=$_POST["age"];
    $image=$_POST["image"];
    print_r($firstname);
    print_r($lastname);
    print_r($age);
    print_r($image);
    if(empty($firstname) || empty($lastname) || empty($age)){
        echo "<p style='text-align:center;color:red;'>Empty!</p>";
    }else if(is_numeric($firstname) || is_numeric($lastname)){
        echo "<p style='text-align:center;color:red;'>Enter valid name!</p>";
    }else{
        $sql="INSERT into users(first_name,last_name,age,image) VALUES(:first_name,:last_name,:age,:image)";
        $query=$pdo->prepare($sql);
        $query->execute(["first_name"=>$firstname,"last_name"=>$lastname,"age"=>$age,"image"=>$image]);
        // header("Location:registration.php");
    };
}else{

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <div id="regdiv">
        <h1 style="text-align:center;font-size:6vmin;">Registration</h1>
        <form action="registration.php" method="post">
        <input type="text" name="first_name" placeholder="First Name"/>
        <input type="text" name="last_name" placeholder="Last Name"/>
        <input type="number" name="age" placeholder="Age"/>
        <input style="background:none;"type="file" name="image" placeholder="Image"/>
        <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>