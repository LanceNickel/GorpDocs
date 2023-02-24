<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Utilities - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Utilities

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('utilities'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Utilities</h1>

        <p>Gorp includes a few utilities to make managing a Minecraft server even easier.</p>

        <a class="no-underline" href="/utilities/jar-update/">
            <div class="option-button">
                <span class="subsection">JAR Updater</span>
                <span class="description">Get & set the latest JAR file for for the set Minecraft game version.</span>
            </div>
        </a>

        <a class="no-underline" href="/utilities/jar-download/">
            <div class="option-button">
                <span class="subsection">JAR Downloader</span>
                <span class="description">Download the Paper Server JAR file for a specified Minecraft game version.</span>
            </div>
        </a>

        <a class="no-underline" href="/utilities/gorp-upgrade/">
            <div class="option-button">
                <span class="subsection">Gorp Upgrader</span>
                <span class="description">Download and install the latest version of Gorp to get the latest features.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/manage-instances/" class="button">Manage Instances</a>
        <a href="/configuration-file/" class="button">Configuration File</a>


    </main>

</html>
