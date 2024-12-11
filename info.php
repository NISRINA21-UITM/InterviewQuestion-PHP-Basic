<?php
// info.php

// Check if the username is set
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username is "abc"
    if ($username === 'abc') {
        echo "Verified!"; // Return verified message
    } else {
        echo "Error!!!"; // Return error message
    }
} else {
    echo "Error: No username provided.";
}
?>