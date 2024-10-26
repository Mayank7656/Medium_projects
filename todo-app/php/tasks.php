<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM tasks WHERE user_id=$user_id");
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['task']} - 
          <a href='php/edit_task.php?id={$row['id']}'>Edit</a>
          <a href='php/delete_task.php?id={$row['id']}'>Delete</a>
          </li>";
}
