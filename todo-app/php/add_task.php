<?php
session_start();
require 'connect.php';

if (isset($_SESSION['user_id'])) {
    $task = $_POST['task'];
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("INSERT INTO tasks (task, user_id) VALUES (?, ?)");
    $stmt->bind_param("si", $task, $user_id);
    $stmt->execute();
    $stmt->close();
    header('Location: ../home.php');
}
?>
