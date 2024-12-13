<?php
$pageTitle = "Home";
include "view-header.php";  // Include the header
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final Project</title>
  <style>
    /* Apply the background image to the entire body */
    body {
        background-image: url('https://www.hashmicro.com/blog/wp-content/uploads/2022/09/1-1.jpg'); /* Background image URL */
        background-size: cover; /* Ensure the background image covers the entire screen */
        background-position: center; /* Center the image */
        background-attachment: fixed; /* Keep the background fixed while scrolling */
        height: 100vh; /* Full viewport height */
        margin: 0; /* Remove default margin */
        font-family: Arial, sans-serif; /* Set a default font */
    }

    /* Flex container to center content both vertically and horizontally */
    .content-container {
        display: flex;
        justify-content: center; /* Center content horizontally */
        align-items: center; /* Center content vertically */
        height: 100vh; /* Full viewport height */
        text-align: center; /* Center the text */
        color: white; /* Text color */
    }

    /* Style for the main title (h1) */
    .content-container h1 {
        font-size: 4em; /* Increase the font size */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional: Add shadow to the text for better visibility */
        margin: 0; /* Remove any margin */
    }

    /* Optional: Add a background color to the header */
    header {
        background-color: rgba(0, 0, 0, 0.5); /* Transparent black background for header */
        padding: 20px;
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
        z-index: 10; /* Ensure the header stays above the background */
    }

    /* Optional: Add a background color to the footer */
    footer {
        background-color: rgba(0, 0, 0, 0.5); /* Transparent black background for footer */
        padding: 20px;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        z-index: 10; /* Ensure the footer stays above the background */
    }
  </style>
</head>
<body>

  <!-- Page Content -->
  <div class="content-container">
      <h1>Final Project</h1>
  </div>

  <?php
  include "view-footer.php";  // Include the footer
  ?>

</body>
</html>
