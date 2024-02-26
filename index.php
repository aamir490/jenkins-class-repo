<!DOCTYPE html>
<html>
<head>
    <title>Personalized Greeting</title>
</head>
<body>

<?php
    // Define variables and set to empty values
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>Personalized Greeting Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($name)) {
            echo "<h3>Hello, " . $name . "!</h3>";
        } else {
            echo "<h3>Please enter your name!</h3>";
        }
    }
?>

</body>
</html>

