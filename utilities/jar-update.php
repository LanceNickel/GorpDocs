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

        <div class="pre-container">
            <pre>gorp update-jar</pre>
        </div>



        <h2>Automatic Updates <span class="tag box green subtle inline">NEW</span></h2>

        <p><strong>By default</strong>, Gorp automatically updates the server JAR file to the latest version every Tuesday at 4AM (server time). The update frequency can be changed by updating <mono>UPDATE_FREQUENCY</mono> in the Gorp configuration file. Either input a cron expression or disable automatic updates with <mono>disabled</mono>.</p>

        <p>You can edit the Gorp configuration file using <a class="no-underline" href="/configuration-file.php"><code>gorp config</code></a>.</p>


    </main>

</html>
