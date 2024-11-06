<?php

$message = "";
//<!-- POST -->
/*Checkks the form*/ 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = isset($_POST['name']) ? htmlspecialchars(string: $_POST['name']) : '';
    $birthday = isset($_POST['birthday']) ? htmlspecialchars(string: $_POST['birthday']) :'';
    $birthplace= isset($_POST['birthplace']) ? htmlspecialchars(string: $_POST['birthplace']) :'';
    $gender = isset($_POST['gender']) ? htmlspecialchars(string: $_POST['gender']) :'';
    $status = isset($_POST['status']) ? htmlspecialchars(string: $_POST ['status']) :'';
    $citizenship = isset($_POST['citizenship']) ? htmlspecialchars(string: $_POST ['citizenship']) :'';
    $email = isset($_POST['email']) ? htmlspecialchars(string: $_POST ['email']) :'';
    $number = isset($_POST['number']) ? htmlspecialchars(string: $_POST ['number']) :'';
    $address = isset($_POST['address']) ? htmlspecialchars(string: $_POST ['address']) :'';
    $course= isset($_POST['course']) ? htmlspecialchars(string: $_POST ['course']) :'';
    $studnum = isset($_POST['studnum']) ? htmlspecialchars(string: $_POST ['studnum']) :'';
    $insemail = isset($_POST['insemail']) ? htmlspecialchars(string: $_POST ['insemail']) :'';
   

    /**OUTPUT */
    $message =  "<b>Name: </b>" .$name . "<br>".
                "<b>Birthday: </b>" . $birthday . "<br>" .
                "<b>Birthplace: </b>". $birthplace . "<br>" .
                "<b>Gender: </b>". $gender . "<br>" .            
                "<b>Status: </b>" . $status . "<br>" .
                "<b>Citizenship: </b>". $citizenship . "<br>".
                "<b>Email: </b>". $email . "<br>".
                "<b>Number: </b>". $number . "<br>" .
                "<b>Address: </b>". $address . "<br>".
                "<b>Course: </b>". $course . "<br>" .
                "<b>Student No.: </b>" . $studnum . "<br>" .
                "<b>Institutional Email: </b>" . $insemail . "<br>";
}
?>

<!DOCTYPE HTML>  
<html lang = "en">
<head>
<meta charset = "UTF-8"> 
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0"> 
    <title>INFORMATION</title> 
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-image: url(studentbackground.jpg);    
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            font-size: 15px;
        }

        .container {
            width: fit-content;
            margin: 93px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            backdrop-filter: blur(50px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }

        p {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #c53ca3;
            display:flex;
            text-decoration: none;
            font-weight: bold;
            justify-content: right;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }
  
        input[type="Go back"] {
            background-color: #c53ca3;
            color: #fff;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;         
        }

        input[type="Go back"]:hover {
            background-color: #ccc;
        }
</style>

<body>
<div class = "container">
        <!-- Display the the user's information after submitting -->
        <h1>Your Information</h1>
        <p><?php echo $message; ?></p>
        <a href="Student Information.php">BACK</a>
    </div>
</body>
</html>