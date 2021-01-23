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
        <h1><b>THE DATA</b></h1>
        <p>Welcome to the Data Page for <span class="w3-tag">COMP2001 Part 2</span></p>
    </header>

    <!-- Grid -->
    <div>

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->
            <div>
                <div>
                    <h3><b>The Data</b></h3>
                    <div style="overflow-x:auto;">
                        <?php
                        echo "<html><body><table>\n\n";
                        $f = fopen("COMP2001LibraryInformation.csv", "r");
                        while (($line = fgetcsv($f)) !== false) {
                            echo "<tr>";
                            foreach ($line as $cell) {
                                echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                            echo "</tr>\n";
                        }
                        fclose($f);
                        echo "\n</table></body></html>";
                        ?>
                    </div>
                </div>


            </div>
            <hr>

            <!-- Posts -->+
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4><b>Links</b></h4>
                </div>
                <button class="w3-button w3-black w3-padding-large w3-margin-bottom"><a href="Index.php">Index Page</a></button>
                <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Data Page</button>
                <button class="w3-button w3-black w3-padding-large w3-margin-bottom"><a href="Entity.php">Entity Page</a></button>
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
