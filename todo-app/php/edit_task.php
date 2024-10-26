<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit();
}

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT task FROM tasks WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $task_id, $user_id);
    $stmt->execute();
    $stmt->bind_result($task);
    $stmt->fetch();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <style>
        .update {
            background-color: #5c76b8;
            padding: 5px;
            border: 0;
            border-radius: 0.3rem;
            color: white;
            font-weight: 600;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="POST" action="./update_task.php?id=<?php echo $task_id; ?>">
        <label for="task">Task:</label>
        <input type="text" name="task" id="task" value="<?php echo htmlspecialchars($task); ?>" required>
        <button class="update" type="submit">Update Task</button>
    </form>
</body>
</html>
