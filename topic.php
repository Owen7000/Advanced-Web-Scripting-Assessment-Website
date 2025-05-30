<?php
    /**
     * File Name: topic.php 
     * Description: This page contains topic information about the three areas of speciality.
     * Author: Owen Plimer
     * Created On: 23/05/2025
     * Last Modified: 25/05/2025
     * Version: 1.1.0
     * 
     * Notes:
     * - There are currently no notes for this file.
    */

    require "includes/styles.req.php";
    $colourScheme = StyleTheme::Purple;
    $pageTitle = "Topic Information";
    $headerOption = 2;
    $requireLoggedInUser = True;
    
    require "includes/header.inc.php";
?>

<div id="navigation-section">
    <div id="rockets-button" class="button" href="data/launchSystem.json">
        <img src="assets/img/New-Shepard.jpg" class="big-image">

        <p>
            Rockets
        </p>
    </div>

        <div id="payloads-button" class="button" href="data/payload.json">
        <img src="assets/img/hubble.jpg" class="big-image">

        <p>
            Payloads
        </p>
    </div>

        <div id="parts-button" class="button" href="data/spareParts.json">
        <img src="assets/img/Family-Gathering.jpeg" class="big-image">

        <p>
            Parts
        </p>
    </div>
</div>

<hr>

<section>
    <h2 id="topic-name"></h2>

    <div id="item-list">

    </div>
</section>

<template id="list-item-template">
    <div class="listItem">
        <p class="itemName"></p>
        <p class="itemDescription"></p>
        <p class="itemCondition"></p>
        <hr class="item-divider">
    </div>
</template>

<script src="javascript/topicInformation.js"></script>

</main>
</body>
</html>