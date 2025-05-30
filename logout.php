<?php
    /**
     * File Name: logout.php 
     * Description: This page destroys the sessions object and logs you out of the website
     * Author: Owen Plimer
     * Created On: 25/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.0.0
     * 
     * Notes:
     * - There are currently no notes for this file.
    */


    // First, start the sessions object
    session_start();

    // Now destroy the session
    session_destroy();

    // Now send the user to the login page
    header("Location: login.php");

    // Now, make sure that this script finishes execution here
    exit("You have now been logged out");
?>