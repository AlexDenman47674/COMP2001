<?php
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <h1><b>THE INDEX</b></h1>
        <p>Welcome to the Index Page for <span class="w3-tag">COMP2001 Part 2</span></p>
    </header>

    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>The aim of this project</b></h3>
                </div>

                <div class="w3-container">
                    <p>The aim of this project is to create a PHP application that features both an Index Page and a Data Page that are linked together. The Data Page will present
                    data from a chosen csv file, in this case the csv file contains information on Plymouth Libraries, and present it in a human readable manner.</p>
                </div>
            </div>
            <hr>

            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>How will the Project be completed?</b></h3>
                </div>

                <div class="w3-container">
                    <p>The Project will be completed using PHPStorm to create the web pages and AMPPS to run it. Version control will be completed with GitHub and GitHub Desktop.</p>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Card -->
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><b>Created by Alex Denman</b></h4>
                    <p>I don't think anyone would want to claim this as their own but just in case, this is my project.</p>
                </div>
            </div><hr>

            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4><b>Links</b></h4>
                </div>
                <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Index Page</button>
                <button class="w3-button w3-black w3-padding-large w3-margin-bottom"><a href="Data.php">Data Page</a></button>
                <button class="w3-button w3-black w3-padding-large w3-margin-bottom"><a href="Entity.php">Entity Page</a></button>
            </div>
            <hr>



            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>

