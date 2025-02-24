<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>admin</title>
</head>

<body>
    <form action="../backend/admincourse.php" method="post" enctype="multipart/form-data">
        <input type="text" name='topic' placeholder='topic'>
        <input type="text" name='price' placeholder='price'>
        <input type="text" name='lesson' placeholder='lesson'>
        <input type="text" name='duration' placeholder='duration'>
        <input type="file" name='image' placeholder='duration'>
        <input type="submit" value='done'>

    </form>
</body>

</html>