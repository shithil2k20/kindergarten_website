<?php
require "./connect.php";
$top = $_POST['topic'];
$les = $_POST['lesson'];
$dur = $_POST['duration'];

// Check if the image file was uploaded successfully
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../course/images/' . $file;
    // Move the uploaded file to the desired location
    if (!move_uploaded_file($tempname, $folder)) {
        die('Error moving uploaded file');
    }
} else {
    die('Error uploading image');
}

// Insert course into the database
$regi = $conn->prepare("INSERT INTO courses (topic, lesson, duration,image ) VALUES (?, ?, ?, ?)");
$regi->bind_param("siss", $top, $les, $dur, $file);
$regi->execute();
$new_course_id = $conn->insert_id; // Get the ID of the newly inserted course
$regi->close();

// Generate form for lessons
echo '<form method="post" action="./lessonload.php">';
for ($it = 0; $it < $les; $it++) {
    echo '
    <label for="url">Lesson ' . ($it + 1) . '</label>
    <input type="text" name="url[]" placeholder="URL">
    ';
}
echo '<input type="hidden" name="id" value="' . $new_course_id . '">
<input type="submit" value="Submit" class="btn">
</form>';
$conn->close();
?>
