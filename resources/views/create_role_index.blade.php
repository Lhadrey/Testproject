<!DOCTYPE html>
<html>
<head>
    <title>Role management</title>
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
        <h2>Role management</h2>
        <form action="/create_role" method="post">
            @csrf 
            <label for="username">Role Name:</label>
            <input type="text" id="role_name" name="role_name" required>

            <label for="password">Status:</label>
            <input type="radio" value="Active" id="status1" name="status">
            <label>Active</label>
            <input type="radio" value="Inactive" id="status2" name="status">
            <label>Inactive</label>
            <br/><br/><br/>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
