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



        <h2>Update Server JAR</h2>

        <pre>gorp update-jar</pre>

        <p>This will download the latest JAR file to <mono>/minecraft/jars</mono> and update <mono>/minecraft/jars/latest</mono> with the downloaded JAR's information. This update will take effect the next time a server instance is started or restarted.</p>


    </main>

</html>
