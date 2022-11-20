<?php
$insert =false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password ="";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    //echo "Success connecting to DB";

    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $desc = $_POST['desc'];
    $sql =" INSERT INTO `college admission form`.`details` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `dt`) 
    VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;

    if ($con->query($sql)==true){
        //echo 'Successfully inserted';
        $insert =true;
    
    }
    else{
        echo 'ERROR: $sql <br> $con->error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to college feedback form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class ='bg' src="thakur college.jpeg" alt="Thakur college">
    <div class ='container'>
        <h2> Welcome to Thakur college of engineering and technology</h2>
        <p > Kindly enter your details in below form .</p>
        <?php
        if ($insert ==true){
         echo '<p class="submit" style="color:green;">Thanks for submitting your form.</p>';

        }
        ?>
        <form action=" " method="post" >
            <input type ='text' name ='name' id ='name' placeholder="Enter your name">
            <input type ='text' name ='age' id ='age' placeholder="Enter your age">
            <input type ='text' name ='gender' id ='gender' placeholder="Enter your gender">
            <input type ='email' name ='email' id ='email' placeholder="Enter your email">
            <input type ='phone' name ='phone' id ='phone' placeholder="Enter your phone number">
            <textarea name ="desc" id ="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" >Submit</button>
            <button class="btn">Reset</button>
        </form>

    </div>
    <script src ='index.js'></script>
    
</body>
</html>