<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="form-style.css">
</head>
<body>
    <h1>Contact Us</h1>
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>" . htmlspecialchars($_GET['error']) . "</p>";
    }
    ?>
    <form action="submit_contact.php" method="post">
        Name: <input type="text" name="name"><br>
        Message: <textarea name="message"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
