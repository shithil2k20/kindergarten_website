<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletb.css">
    <title>Admin</title>
</head>
<body>
<div class="main">
        <?php
        require('../backend/connect.php');
        $sql = 'SELECT * FROM student ';
        $query  = mysqli_query($conn,$sql);
        ?>
        <div class="section white-text" style="">
            <div class="admin-header">
                <h3>Students</h3>
            </div>
            <?php
                if (isset($_SESSION['msg'])) {
                    echo '<div class="section center" style="margin: 5px 35px;"><div class="row" style="background: red; color: white;">
                    <div class="col s12">
                    <h6>' . $_SESSION['msg'] . '</h6>
                    </div>
                    </div></div>';
                    unset($_SESSION['msg']);
                }
            ?>
            <div>
                <table >
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th> Name</th>
                            <th>email</th>
                            <th>Phone Number</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($key = mysqli_fetch_assoc($query)){
                            
                                echo '
                                    <tr>
                                    <td>'.$key['id'].'</td>
                                    <td>'.$key['name'].'</td>
                                    <td>'.$key['Email'].'</td>
                                    <td>'.$key['phone_number'].'</td>
                                    <td>'.$key['password'].'</td>
                                ';
                            }
                        ?>
                        <a href="./addcrs.php"> add course</a>
</body>
</html>