<?php
// If form is submitted, display the formatted output
if ($_SERVER["REQUEST_METHOD"] == "POST") {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <style>
        body {
            font-family: Arial;
            background: #eef2f3;
        }
        .box {
            width: 40%;
            background: white;
            padding: 20px;
            margin: auto;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
        }
        p {
            font-size: 18px;
            line-height: 28px;
        }
        span {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Application Submitted Successfully</h2>

    <p><span>Name:</span> <?php echo $_POST["name"]; ?></p>
    <p><span>Email:</span> <?php echo $_POST["email"]; ?></p>
    <p><span>Phone:</span> <?php echo $_POST["phone"]; ?></p>
    <p><span>Gender:</span> <?php echo $_POST["gender"]; ?></p>
    <p><span>Address:</span> <?php echo $_POST["address"]; ?></p>

</div>

</body>
</html>

<?php
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Application Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }

        .container {
            width: 40%;
            margin: auto;
            background: white;
            padding: 25px;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: green;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Online Application Form</h2>

    <form id="appForm" method="POST">

        <label>Name:</label>
        <input type="text" name="name" id="name">

        <label>Email:</label>
        <input type="email" name="email" id="email">

        <label>Phone:</label>
        <input type="text" name="phone" id="phone">

        <label>Gender:</label>
        <select name="gender" id="gender">
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Address:</label>
        <textarea name="address" id="address"></textarea>

        <button type="submit" id="submitBtn">Submit</button>
    </form>
</div>

<script>
    $("#submitBtn").click(function (e) {

        if ($("#name").val() === "" ||
            $("#email").val() === "" ||
            $("#phone").val() === "" ||
            $("#gender").val() === "" ||
            $("#address").val() === "") {

            alert("Please fill all fields");
            e.preventDefault(); // Stops form submit
        }
    });
</script>

</body>
</html>
