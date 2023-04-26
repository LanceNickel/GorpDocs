<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Install on Fedora - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Getting Started

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('getting-started'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Gorp Requirements</h1>

        <h2>Requirements</h2>

        <ul>
            <li>8GB of RAM (for optimal Minecraft server performance)</li>
            <li>50GB available disk space (for world saves and local backups)</li>
        </ul>


        <h3>A note about distros</h3>

        <p>Each release of Gorp is tested on Fedora 38, Ubuntu Server 22.04, and openSUSE Leap 15.4. If it supports these distros, it will likely work on most others.</p>



        <h2>Dependencies</h2>

        <ul>
            <li>curl</li>
            <li>wget</li>
            <li>jq</li>
            <li>screen</li>
        </ul>


    </main>

</html>