<?php
    /**
     * File Name: faq.php 
     * Description: This page contains frequently asked questions along with their answers.
     * Author: Owen Plimer
     * Created On: 23/05/2025
     * Last Modified: 30/05/2025
     * Version: 1.2.0
     * 
     * Notes:
     * - There are currently no notes for this file.
    */

    require "includes/styles.req.php";
    $colourScheme = StyleTheme::Yellow;
    $pageTitle = "Frequently Asked Questions";
    $headerOption = 2;
    $requireLoggedInUser = True;

    require "includes/header.inc.php";
?>

<section id="question-container">
    <!-- This is where the main content will go -->

    <question id="question-1">
        <question-text id="question-1-text">
            Why does New Shepard look like that?
        </question-text>

        <button id="question-1-button">
            Reveal Answer
        </button>
    </question>

    <question id="question-2">
        <question-text id="question-2-text">
            Exactly how much of the taxpayers money did <i>Ares 1</i> waste?
        </question-text>

        <button id="question-2-button">
            Reveal Answer
        </button>
    </question>

    <question id="question-3">
        <question-text id="question-3-text">
            What was wrong with Hubble shortly after it launched?
        </question-text>

        <button id="question-3-button">
            Reveal Answer
        </button>
    </question>
</section>

<script src="javascript/faq.js"></script>

</main>
</body>
</html>