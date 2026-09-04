<!DOCTYPE html>
<?php
$fullname   = $_POST["fullname"];
$mypassword = $_POST["myPassword"];
$myemail    = $_POST["myEmail"];
$mystatus   = $_POST["status"];
$mynumber   = $_POST["number"];
$birthdate  = $_POST["birthdate"];
$gender     = $_POST["gender"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="title">Welcome Back!</div>
        <div class="form">
            <p><strong>Full Name:</strong> <?= ($fullname) ?></p>
            <p><strong>Password:</strong> <?= ($mypassword) ?></p>
            <p><strong>Email:</strong> <?= ($myemail) ?></p>
            <p><strong>Birthdate:</strong> <?= ($birthdate) ?></p>
            <p><strong>Number:</strong> <?= ($mynumber) ?></p>
            <p><strong>Gender:</strong> <?= ($gender) ?></p>
            <p><strong>Status:</strong> <?= ($mystatus) ?></p>
            <h4>Hello: <?= ($fullname) ?></h4>
            <h4>Welcome Back chuyy!!: <?= ($fullname) ?>!</h4>
        </div>
    </div>
</body>
</html>

