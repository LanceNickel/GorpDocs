<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Welcome - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Welcome

        <a id="change-theme" class="button theme"></a>
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

        <p>Gorp's name courtesy of my good friend <a class="invisible" href="/0/styles/elements/">Connor</a>. He was not aware at the time (and neither was I) that Gorp was slang for trail mix. Yummy!</p>

        <a href="https://github.com/LanceNickel/Gorp" target="_blank" class="button">Gorp on Github</a>
        <a href="https://github.com/LanceNickel/Gorp/issues" target="_blank" class="button">Raise an Issue</a>
        <a href="mailto:gorp@lanickel.com" class="button">Email Me (gorp@lanickel.com)</a>

        

        <h2>Requirements</h2>

        <ul>
            <li>8GB of RAM (for optimal Minecraft server performance)</li>
            <li>50GB available disk space (for world saves and local backups)</li>
            <li>Depends on: curl, wget, jq, screen</li>
        </ul>



        <h2>License & Warranty</h2>

        <p>Gorp is licensed under the GNU GPL v3 license. The full license text is available here: <a href="/license/">License info</a>.</p>

        <p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.</p>



        <h2>Install Gorp</h2>

        <a href="/getting-started/install/" class="button blue">Installation Instructions (it's one command!)</a>


    </main>

</body>
    
</html>
