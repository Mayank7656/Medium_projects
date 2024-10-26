<!DOCTYPE html>
<html>

<head>
    <title>My Tasks</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/main.js" defer></script>
    <style>
        .bg-red {
            background-color: #ff0039;
            transition: 0.3s;
        }

        .bg-red:hover {
            background-color: #e2113f;
        }

        .bg-red a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Tasks</h1>
    <ul>
        <?php include 'php/tasks.php'; ?>
    </ul>
    <form method="post" action="php/add_task.php">
        <input type="text" name="task" required>
        <button type="submit">Add Task</button>
        <button class="bg-red"><a href="php/signout.php">Sign Out</a></button>
    </form>
</body>

</html>