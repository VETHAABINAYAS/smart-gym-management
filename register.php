<?php
include 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $plan = $_POST['plan'];

    $sql = "INSERT INTO membership (name, email, phone, age, gender, plan)
            VALUES ('$name', '$email', '$phone', '$age', '$gender', '$plan')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration Successful!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .box {
            display:flex;
            justify-content:center;
            align-items:center;
            height:70vh;
        }
        .msg {
            background:white;
            padding:30px;
            border-radius:10px;
            text-align:center;
        }
    </style>
</head>

<body>

<header><h1>Fitness Club</h1></header>

<div class="box">
    <div class="msg">
        <h2><?php echo $message; ?></h2>
        <a href="membership.html">Go Back</a>
    </div>
</div>

<footer><p>© 2026 Fitness Club</p></footer>

</body>
</html>