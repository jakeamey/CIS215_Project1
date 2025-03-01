<?php
// Author: Jacob Amey
// CIS 215 Project 1
//https://csnlinux.genesee.edu/~jamey/proj1/CIS215_Project1/project1starter.php

// Function to sanitize input
function clean_input($data) {
    return htmlspecialchars(trim($data));
}

// Error messages
$errors = [];
$email = $password = $age = $gender = $hobby = $hobby_hours = "";

// Validate and clean email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required.";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format.";
        }
    }

    //Password hash for "jacobamey"
    $hashedPassword = "$2y$10$1cnX3CDfSvTfDeosai/rPezAr/9ZfLtCCsvDlHN/FMa0kcj60mNRK";

    // Validate password
    $password = $_POST["password"] ?? '';
    if (empty($password)) {
        $errors["password"] = "Password is required.";
    } elseif (!password_verify($password, $hashedPassword)) {
        $errors["password"] = "Incorrect password.";
    }

    // Validate and clean age
    if (empty($_POST["age"])) {
        $errors["age"] = "Please select your age range.";
    } else {
        $age = clean_input($_POST["age"]);
    }

    // Validate and clean gender
    if (empty($_POST["gender"])) {
        $errors["gender"] = "Gender selection is required.";
    } else {
        $gender = clean_input($_POST["gender"]);
    }

    // Validate and clean hobby
    if (empty($_POST["hobby"])) {
        $errors["hobby"] = "Please enter your favorite hobby.";
    } else {
        $hobby = clean_input($_POST["hobby"]);
    }

    // Validate and clean hobby hours
    if (empty($_POST["hobby_hours"])) {
        $errors["hobby_hours"] = "Please select hours spent on hobbies.";
    } else {
        $hobby_hours = clean_input($_POST["hobby_hours"]);
    }

    // Submit if no errors
    if (empty($errors)) {
        header("Location: submit.php");
        exit();
    }
}
?>
<!-- HTML form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey: Favorite Hobbies</title> 
</head>
<body>

<?php

// Display errors at the top
if (!empty($errors)) {
    echo "<div style='color: red;'><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul></div>";
}
?>

<!-- email form -->
<form action="" method="post">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
    <br>
<!-- password form -->
    <label for="password">Enter your password: </label>
    <input type="password" name="password" id="password" required>
   <br>
<!-- age form -->
    <fieldset>
        <legend>What age are you?</legend>
        <?php
        $age_ranges = ["0-12", "13-17", "18-22", "23-27", "28-32", "33-37", "38-42", "43-47", "48-52", "53-57", "58-62", "63-67", "68+"];
        foreach ($age_ranges as $index => $range) {
            $checked = ($age === $range) ? "checked" : "";
            echo "<input type='radio' name='age' id='age$index' value='$range' $checked><label for='age$index'>$range</label>";
        }
        ?>
    </fieldset>
<!-- gender form -->
    <label for="gender">Select your gender:</label>
    <select name="gender" id="gender">
        <option value="">Select</option>
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="nb">Nonbinary</option>
        <option value="gf">Genderfluid</option>
        <option value="a">Agender</option>
        <option value="o">Choose not to say/Other</option>
    </select>
   <br>
<!-- hobby form -->
    <label for="hobby">What is your favorite hobby?</label>
    <input type="text" name="hobby" id="hobby" value="<?php echo htmlspecialchars($hobby); ?>" required>
    <br>
<!-- hobby hours form -->
    <label for="hobby_hours">How many hours per week do you spend on hobbies?</label>
    <select name="hobby_hours" id="hobby_hours" required>
        <option value="">Select hours</option>
        <option value="0-1">0-1 hours</option>
        <option value="2-4">2-4 hours</option>
        <option value="5-7">5-7 hours</option>
        <option value="8-10">8-10 hours</option>
        <option value="11+">11 or more hours</option>
    </select>
   <br>
<!-- submit button -->
    <input type="submit" value="Submit">
</form>

</body>
</html>
