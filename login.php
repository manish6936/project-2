<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 36px;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            background-color: #1AA7EC;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #808080;
        }

        #signup-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #1AA7EC;
           text-decoration: none;
            font-weight: bold;
        }
        #forgetPassword {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="connect_retrieve.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Submit">
        <a href="Forget_password.html" id="forgetPassword">Forget Password!</a> 
        <a href="signup.php" id="signup-link">Create new account!</a>
    </form>

</body>
</body>

</html>