<?php
    /**
     * File Name: index.php 
     * Description: This is the welcome page for the website. It contains the basic navigation for pages.
     * Author: Owen Plimer
     * Created On: 23/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.0.0
     * 
     * Notes:
     * - There are currently no notes for this file.
     */

    require "includes/styles.req.php";
    $colourScheme = StyleTheme::Red;
    $pageTitle = "Welcome";
    $headerOption = 3;
    $requireLoggedInUser = True;

    require "includes/header.inc.php";
?>

        <div id="navigation-section">
            <div id="btnTopicInformation" class="button">
                <img src="assets/img/information.png"/>

                <p>
                    Topic Information
                </p>
            </div>

            <div id="btnLogout" class="button">
                <img src="assets/img/logout.png"/>

                <p>
                    Logout
                </p>
            </div>

            <div id="btnFaq" class="button">
                <img src="assets/img/Question-Mark-Emoji.png"/>

                <p>
                    FAQ
                </p>
            </div>
        </div>

        <section>
            <h1>Welcome!</h1>

            <p>
                Welcome to <span class="bold">Space Related Business</span> (SRB for short). We are a community of <span class="bold">Space Transportation</span> enthusiasts who are looking to provide access to high quality information about space transportation. Thank you for being a member.
            </p>
        </section>
    </main>

    <script src="javascript/index.js"></script>
</body>
</html>