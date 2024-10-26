<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit();
}

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $new_task = $_POST['task'];

    $stmt = $conn->prepare("UPDATE tasks SET task = ? WHERE id = ? AND user_id = ?");
    $stmt->bind_param("sii", $new_task, $task_id, $user_id);
    $stmt->execute();
    $stmt->close();

    header('Location: ../home.php');
    exit();
}
?>
