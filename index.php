<!DOCTYPE html>


<?php
require_once('0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= stylesheet('dark'); ?>

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Welcome - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Welcome
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('welcome'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Welcome to the Gorp Documentation Site!</h1>
        <p>Gorp is a small jumble of shell scripts to help automate daily Minecraft server tasks. Gorp is lightweight, fast, and much simpler than other tools. Because of that, installing and updating Gorp takes seconds! Gorp can support many server instances. It has backup functionality, automatic JAR update functionality, and custom global options.</p>

        <p>I created this program to make managing my personal Minecraft servers easier. Before this, I was running each server in a screen and manually updating each. This program makes the task of updating multiple servers go from 5 minutes to 5 seconds!</p>

        <p>Gorp's name courtesy of my good friend Connor Atkins. He was not aware at the time (and neither was I) that Gorp was another name for trail mix. Yummy!</p>

        <a href="https://github.com/LanceNickel/Gorp" target="_blank" class="button">Gorp on Github</a>
        <a href="https://github.com/LanceNickel/Gorp/issues" target="_blank" class="button">Report an Issue</a>
        <a href="mailto:gorp@lanickel.com" class="button">Email Me (gorp@lanickel.com)</a>

        

        <h2>Requirements</h2>

        <ul>
            <li>8GB of RAM (for decent Minecraft server performance)</li>
            <li>50GB available disk space (for world saves and local backups)</li>
            <li>Debian or Debian-based distro (tested on: Debian 11, Ubuntu Server 20.04 LTS, Mint 21.1)</li>
        </ul>



        <h2>Notices</h2>
        
        <p>Gorp will update or install the following packages and their dependencies:</p>

        <ul>
            <li>apt-transport-https</li>
            <li>curl</li>
            <li>wget</li>
            <li>jq</li>
            <li>screen</li>
        </ul>



        <h2>Install Gorp</h2>
        
        <p>Installing Gorp is quick and easy!</p>

        <a href="/getting-started/terminology/" class="button blue">Getting Started</a>


    </main>

</body>
    
</html>
