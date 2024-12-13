<?php
$pageTitle = "Home";
include "view-header.php";
?>

<!-- Page Content -->
<div class="background-container">
    <div class="text-center">
        <h1>Final Project</h1>
    </div>
</div>

<?php
include "view-footer.php";
?>

<!-- CSS Style -->
<style>
/* Style for the background container */
.background-container {
    /* Set the background image */
    background-image: url('https://www.hashmicro.com/blog/wp-content/uploads/2022/09/1-1.jpg');
    background-size: cover; /* Cover the entire container */
    background-position: center; /* Center the image */
    background-attachment: fixed; /* Fix the background image */
    
    /* Full height of the viewport */
    height: 100vh; 
    
    /* Flexbox to center content */
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

/* Styling the text */
.background-container h1 {
    color: white; /* Set text color to white */
    font-size: 4em; /* Make the text larger */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional: Add shadow for better visibility */
    margin: 0; /* Remove any margin from the h1 */
}
</style>
