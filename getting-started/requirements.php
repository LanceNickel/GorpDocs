<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Requirements - Gorp Docs</title>
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

        <ul>
            <li>8GB of RAM (for optimal Minecraft server performance)</li>
            <li>50GB available disk space (for world saves and local backups)</li>
        </ul>


        <h3>A note about distros</h3>

        <p>Each release of Gorp is tested on openSUSE Tumbleweed and Debian 12. If you encounter an issue with a specific distro, and you are sure it is a distro-specific issue, please let me know.</p>



        <h2>Dependencies</h2>

        <ul>
            <li>curl</li>
            <li>wget</li>
            <li>jq</li>
            <li>screen</li>
        </ul>

        <p>The Gorp install scripts will use your system's package manager to install or update these packages. If you don't want this to happen, download the portable installer and install that way.</p>


    </main>

</html>