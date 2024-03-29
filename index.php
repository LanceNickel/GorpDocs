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

        <p>Gorp is an open source Minecraft server management tool. It runs on the command line and can get you from nothing to playing in less than five minutes! Then, Gorp becomes a powerful server management tool, providing quick access to updates, backups/restorals, configuration changes, and more.</p>

        <p>Gorp reduces time spent on repetitive tasks, allows for quicker customization, and can be used to gather information with status outputs.</p>

        <p>Spend less time managing your servers and more time playing in them!</p>

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
