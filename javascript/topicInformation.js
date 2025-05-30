/**
 * @file topicInformation.js
 * @description This is the main event listener and AJax file for the 
 * topic information page.
 * @author Owen Plimer
 * @contact 1761799@fife.ac.uk
 * @created 2025-05-24
 * @lastUpdated 2025-05-24
 * @version 1.0.0
 */

document.addEventListener("DOMContentLoaded", () => {
    // Grab the three buttons for navigating in the page
    const rocketsButton = document.getElementById("rockets-button");
    const payloadsbutton = document.getElementById("payloads-button");
    const sparesButton = document.getElementById("parts-button");

    // Define the topic name header that will be changed when switching topics
    const topicNameHeader = document.getElementById("topic-name");

    // Create the event handlers for button pressed
    rocketsButton.addEventListener('click', (event) => {
        const file = rocketsButton.getAttribute('href');
        grabFile(file);
        
        topicNameHeader.textContent = "Rockets";
    })

    payloadsbutton.addEventListener('click', (event) => {
        const file = payloadsbutton.getAttribute('href');
        grabFile(file); 
        
        topicNameHeader.textContent = "Payloads";
    })

    sparesButton.addEventListener('click', (event) => {
        const file = sparesButton.getAttribute('href');
        grabFile(file);

        topicNameHeader.textContent = "Spare Parts";
    })

    // Now create the event listener for the home button
    const homeButton = document.getElementById("home-button");
    homeButton.addEventListener('click', () => {
        location.href = "https://fifecomptech.net/~s1761799/SpaceRelatedBusiness/";
    })
});


/**
 * 
 * @param {*} file 
 */
function grabFile(file) {
    console.log(file);
    fetch(file) 
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok.");
            }

            return response.json();
        })
        .then(data => displayData(data.equipment))
        .catch(error => console.error("Fetch Error: ", error))
}


/**
 * Displays the data from the json file that has been loaded.
 * @param {JSON array} data 
 */
function displayData(data) {
    const container = document.getElementById("item-list");

    // Clear the item list of all existing content
    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    // Grab the template from the page
    const template = document.getElementById("list-item-template");

    // Loop through each item in the equipment
    data.forEach(item => {
        // Clone the template.
        const tempClone = template.content.cloneNode(true); // Clone the template
        
        tempClone.querySelector(".itemName").textContent = item.name;
        tempClone.querySelector(".itemDescription").textContent = item.description;
        tempClone.querySelector(".itemCondition").textContent = "Condition: " + item.condition;

        container.appendChild(tempClone);
    });
}