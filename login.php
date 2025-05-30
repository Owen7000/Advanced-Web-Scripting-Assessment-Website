<?php
    /**
     * File Name: login.php 
     * Description: This is where users will log into the website. Users will be directed here if they are not already logged in.
     * Author: Owen Plimer
     * Created On: 23/05/2025
     * Last Modified: 30/05/2025
     * Version: 1.0.1
     * 
     * Notes:
     * - There are currently no notes for this file.
     */

     require "includes/styles.req.php";
     $colourScheme = StyleTheme::Blue;
     $pageTitle = "Login";
     $headerOption = 1;

    require "includes/header.inc.php";
    require "secret/dbConnect.req.php";

    /**
     * Displays all errors in the erros list.
     * If the list passed in is empty, the function will print nothing
     
     * @param mixed $errors A list of strings representing the messages to be displayed to a user
     * @return void
     */
    function displayErrors($errors) {
        if (!empty($errors)) {
            echo "<div class='error-list'>\nPlease correct the following errors:\n<br>\n";

            foreach($errors as $error) {
                echo "<p>$error</p>\n";
            }

            echo "</div>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $errors = [];

        if (!empty($_POST['username'])) {
            $username = mysqli_escape_string($dbConnection, $_POST['username']);
        } else {
            $errors[] = "Please enter a username to continue";
        }

        if (!empty($_POST['password'])) {
            $password = mysqli_escape_string($dbConnection, $_POST['password']);
        } else {
            $errors[] = "Please enter a password to continue";
        }


        // Check to see if there are any errors
        if (empty($errors)) {
            // There are no errors

            // Create the statement
            $stmt = $dbConnection->prepare("SELECT password FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->bind_result($selectedPassword);
            $stmt->execute();
            
            while($stmt->fetch()) {
                // For each returned row, the password hash will be stored in the $selectedPassword variable
                if (password_verify($password, $selectedPassword)) {
                    echo "Correct password";

                    session_start(); // Start a session
                    $_SESSION["userHasLoggedIn"] = True; // Set the user has logged in flag to true
                    header("Location: index.php"); // Now send the user to the homepage

                } else {
                    $errors[] = "The password you entered is incorrect.\nPlease try again.";
                }
            }

        } 

        displayErrors($errors);
    }
?>

<section>
    <form method="post" action="login.php">
        <input id="username" name="username" type="text" title="Username" placeholder="Username">
        <input id="password" name="password" type="password" title="Password" placeholder="Password">

        <input type="submit">
    </form>
</section>