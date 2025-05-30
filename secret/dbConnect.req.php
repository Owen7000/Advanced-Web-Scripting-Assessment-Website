<?php
    /**
     * File Name: dbConnect.req.php 
     * Description: This is possibly THE single most important script in the entire website. It establishes a connection with the database.
     * Author: Owen Plimer
     * Created On: 25/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.0.0
     * 
     * Notes:
     * - There are currently no notes for this file.
     */

    define('USERNAME', '');
    define('PWRD', '');
    define(constant_name: 'HOSTNAME', 'LOCALHOST');
    define('DBNAME', '');


    // Perform the actual connection
    // Using the @ symbol supresses any errors which would show the username for the database.
    $dbConnection = @mysqli_connect(HOSTNAME, USERNAME, PWRD, DBNAME) OR die ("Could not connect to the Database.");
?>