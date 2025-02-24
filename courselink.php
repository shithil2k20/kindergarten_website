<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include '../backend/connect.php';
    if(isset($_GET['id'])){
        include '../homepage/nav.php';
        $log = $conn->prepare('SELECT * FROM courses WHERE id = ?');
        $log->bind_param('s',$_GET['id']);
        $log->execute();
        $result = $log->get_result();
        $course = $result->fetch_assoc();
        ?>
        
        <!-- Display course information -->
        <h2><?php echo $course['topic']; ?></h2>
        <p>Duration: <?php echo $course['duration']; ?></p>
        
        <!-- Display video URLs -->
        <div class="videos">
            <?php
            $sql = "SELECT * FROM stream where course_id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $_GET['id']);
            $stmt->execute();
            $result = $stmt->get_result();
            $ls=1;
            while ($row = $result->fetch_assoc()) {
                echo'<h2>Lesson '.($ls).'</h2>';
                $ls++;
                echo '<iframe width="560" height="315" src="' . $row['video_url'] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            }
            ?>
        </div>

        <?php
        include './footer.php';
    }
    else{
        die("Course ID not provided");
    }
    ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    <script src="../script.js"></script>
</body>

</html>
