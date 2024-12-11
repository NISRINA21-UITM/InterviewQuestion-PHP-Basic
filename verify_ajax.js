// verify_ajax.js

// Wait for the DOM to fully load
document.addEventListener("DOMContentLoaded", function() {
    // Get the form and status message elements
    const form = document.getElementById("usernameForm");
    const statusMessage = document.getElementById("statusMessage");

    // Add an event listener for form submission
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the username input value
        const username = document.getElementById("username").value.trim();

        // Check if the input is empty
        if (username === "") {
            statusMessage.textContent = "Error: Username cannot be empty.";
            statusMessage.style.color = "red";
            return;
        }

        // Create an AJAX request
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "info.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Handle the response from info.php
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Update the status message based on the response
                statusMessage.textContent = xhr.responseText;
                statusMessage.style.color = xhr.responseText.includes("Verified") ? "green" : "red";
            }
        };

        // Send the request with the username
        xhr.send("username=" + encodeURIComponent(username));
    });
});