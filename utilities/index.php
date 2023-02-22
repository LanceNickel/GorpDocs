<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= stylesheet(); ?>

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Utilities - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Utilities
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
