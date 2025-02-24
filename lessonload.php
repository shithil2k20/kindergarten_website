<?php
require "./connect.php";
$urls = $_POST['url'];
$course_id = $_POST['id'];

// Insert lessons into the database
$regi = $conn->prepare("INSERT INTO stream (lesson, video_url, course_id) VALUES (?, ?, ?)");

foreach ($urls as $lesson => $url) {
    $lesson_number = $lesson + 1;
    $regi->bind_param("isi", $lesson_number, $url, $course_id);
    $regi->execute();
}

$regi->close();
$conn->close();
?>
