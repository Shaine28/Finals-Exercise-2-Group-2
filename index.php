<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies, Filters and Sessions</title>
    <style>
        /* Reset some default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-image: "C:\xampp\htdocs\php cookie and session\login background.jpg";
        }

        /* Styling the main container */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url(login\ background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        main {
            width: 23%;
            margin: 40px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            margin-top: 8px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main>
        <h2>Cookies, Filters & Sessions</h2>
        <form action="handle.php" method="post">
            <label for="Email">Email</label>
            <input required id="Email" type="email" name="Email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

            <label for="Username">Username</label>
            <input required id="Username" type="text" name="Username" placeholder="Username" pattern=[A-Za-z\s]+ title="Username should contain letters only.">

            <label for="Password">Password</label>
            <input required id="Password" type="password" name="Password" placeholder="Password">

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>

</html>
