<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        
        .container h2 {
            text-align: center;
        }
        
        .container input[type="text"],
        .container input[type="password"],
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body> 
</html>
