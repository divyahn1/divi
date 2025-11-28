<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <h1>Student Registration Form</h1>

    <form action="submit.php" method="POST" id="regForm">

        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Email Address:</label>
        <input type="email" name="email" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">-- Select --</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <button type="submit">Submit Application</button>
    </form>

<script src="script.js"></script>
</body>
</html>
