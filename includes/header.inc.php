<?php
    /**
     * File Name: header.inc.php 
     * Description: This is the header file for all pages on the site
     * Author: Owen Plimer
     * Created On: 24/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.2.0
     * 
     * Notes:
     * - There are currently no notes for this file.
     */

    // If no page title has been defined, set the title to "Space Related Business"
    if (!isset($pageTitle)) 
    {
        $pageTitle = "Space Related Business";
    }


    // If no header option is defined, assume that option 1 should be used
    if (!isset($headerOption)) {
        $headerOption = 1;
    }


    // Check if a colour theme has been specified, if not, set the blue theme
    if (!isset($colourScheme)) {
        require "styles.req.php";
        // If a style is not set, use the blue theme
        $colourScheme = StyleTheme::Blue;
    } 


    // Check if the user is required to log into this page, if the page hasn't specified, assume they don't need to be logged in
    if (!isset($requireLoggedInUser)) {
        $requireLoggedInUser = False;
    }


    // If the user needs to be logged in, require the login status checker
    if ($requireLoggedInUser) {
        require "userLoginCheck.req.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle?></title>
    <link rel="stylesheet" href="style/main-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon/logo.ico">

    <!--  Temporary. For use during development only -->
    <!-- <meta http-equiv="refresh" content="2"> -->

    <?php
        // Set the correct colour theme for the page
        $colourSchemeFileName = match ($colourScheme) {
            StyleTheme::Blue => "blue-theme.css",
            StyleTheme::Purple => "purple-theme.css",
            StyleTheme::Yellow => "yellow-theme.css",
            StyleTheme::Red => "red-theme.css"
        };

        echo "
            <link rel='stylesheet' href='style/$colourSchemeFileName'>
        ";
    ?>
</head>
<body>
    <?php
        if ($headerOption == 1) {
            // Just the site name in the middle of the screen
            echo '    
                <header>
                    <div id="EmptySection1"></div>

                    <div class="srb-logo-text">
                        Space Related<br>Business
                    </div>

                    <div id="EmptySection2"></div>
                </header>
            ';
        } else if ($headerOption == 2) {
            // The site name in the top right, the back button on the top left, and the name of the page in the top middle
            echo "    
                <header>
                    <div>
                        <button id='home-button'>
                            Home
                        </button>                    
                    </div>

                    <div id='page-title'>
                        <span class='bold'>
                            {$pageTitle}
                        </span>
                    </div>

                    <div class='srb-logo-text'>
                        Space Related<br>Business
                    </div>
                </header>
            ";
        } else if ($headerOption == 3) {

            // The site name in the top middle, and the site logo top-left
            echo "
                <header>
                    <div>
                        <img src='assets/img/srb-logo.png'>
                    </div>

                    <div class='srb-logo-text'>
                        Space Related<br>Business
                    </div>

                    <div></div>
                </header>
            ";
        }
    ?>

    <main>