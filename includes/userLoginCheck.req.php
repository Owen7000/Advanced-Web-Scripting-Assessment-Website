<?php
    /**
     * File Name: userLoginCheck.req.php 
     * Description: This checks if the "userHasLoggedIn" session is set to true. If not, the user is redirected to the login page.
     * Author: Owen Plimer
     * Created On: 25/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.0.0
     * 
     * Notes:
     * - There are currently no notes for this file.
     */

    session_start();

    if (!isset($_SESSION["userHasLoggedIn"]) OR !$_SESSION["userHasLoggedIn"] == True) {
        // The login check has failed, so the user is not logged in.
        header("Location: login.php");
        exit("You must be logged in to use the website.");
    } 
?>