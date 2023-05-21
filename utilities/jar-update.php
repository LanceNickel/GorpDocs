<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>JAR Updater - Gorp Docs</title>
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

        <h1>JAR Updater</h1>

        <p>The JAR updater will download the latest Paper Server JAR file for the Minecraft game version set in the <a href="/configuration-file">Gorp configuration file</a>.</p>

        <div class="blue box">JAR updates should be done regularly, around once a week. This allows you to keep your servers up-to-date, including getting the latest security and bug fixes from the PaperMC team.</div>



        <h2>Update Server JAR</h2>

        <pre>gorp update-jar</pre>

        <p>This will download the latest JAR file to the JAR folder and update the link server instances will use to start the JAR.</p>

        <p>If the value of <mono>GAMEVER</mono> in the <a href="/configuration-file/">configuration file</a> is <mono>latest</mono> (default), Gorp will check for the latest Paper release and download it.</p>


    </main>

</html>
