<?php
    // Make variable output.
$output = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Capture form data
    $gender = htmlspecialchars($_POST['gender']);
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $favouriteWebsite = htmlspecialchars($_POST['favourite-website']);
    $birthday = htmlspecialchars($_POST['birthday']);

    //Checks if last name is input
    if($lastName == "")
    {
        $output = "you need to submit your lastname";
    }
}
else
{
    echo "No data submitted";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Titel of the page-->
        <title>Homepage</title>
        <!--CSS Stylesheet-->
        <link href="css\style.css" rel="stylesheet">
    </head>
    <body id="contact">
        <div class="websitePaths">
            <a href="Index.php">Homepage</a>
            <a href="calculator.php">Calculator</a>
            <a href="Projects.php">Projects</a>
            <a href="Contact.php">Contact</a>
        </div>
        <div class="container">
            <div class="top-part">
                <h1>Contact</h1>
            </div>
            <div class="bottom-part">
                <form action="contact.php" method="POST">
                <label>Gender</label>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <label>First name</label>
                <input name="first-name" type="text">
                <label>Laste name</label>
                <input name="last-name" type="text" required>
                <label>Email</label>
                <input name="email" type="email">
                <label>Favourite website</label>
                <input name="favourite-website" type="url">
                <label>Birthday</label>
                <input name="birthday" type="date">
                <input type="submit" value="Submit">
                <div></div>
                <input type="submit" value="Reset">
                </form>
            </div>
        </div>
        <div class="container">
            <div class="bottom-part">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if($output != "")
                    {
                        echo $output;
                    }
                    else
                    {
                    // Display the submitted information
                    echo "<p>Gender: $gender</p>";
                    echo "<p>First Name: $firstName</p>";
                    echo "<p>Last Name: $lastName</p>";
                    echo "<p>Email: $email</p>";
                    echo "<p>Favourite Website: $favouriteWebsite</p>";
                    echo "<p>Birthday: $birthday</p>";
                    }
                }
                else
                {
                    echo "<p>anwsers will be put here</p>";
                }
                ?>
            </div>
        </div>
    </body>
</html>