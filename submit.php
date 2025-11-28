<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Application Submitted Successfully</h1>

<div style="background:#fff; padding:20px; width:400px; border-radius:10px; box-shadow:0px 0px 10px #999;">

    <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>

</div>

</body>
</html>
