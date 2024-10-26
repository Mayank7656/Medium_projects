<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js" defer></script>
    <style>
        .box_btn {
            display: flex;
            flex-direction: column;
        }

        .box_btn button {
            margin-top: 5px;
        }

        .bg-red {
            background-color: #ff0039;
            transition: 0.3s;
        }

        .bg-red:hover {
            background-color: #e2113f;
        }

        .bg-red a {
            color: white;
        }

        .box_btn button a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form method="post" action="php/signin.php">
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Password:</label><input type="password" name="password" required><br>
        <div class="box_btn">
            <button type="submit">Sign In</button>
            <button><a href="signup.php">Sign Up</a></button>
        </div>
    </form>
</body>
</html>
