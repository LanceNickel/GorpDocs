<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/0/styles/style.css" rel="stylesheet">

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>JAR Updater - Gorp Docs</title>

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

        <h1>JAR Updater</h1>

        <p>The JAR updater will download the latest Paper Server JAR file for the Minecraft game version set in the <a href="/configuration-file">Gorp configuration file</a>.</p>



        <h2>Update Server JAR</h2>

        <pre>gorp update-jar</pre>

        <p>This will download the latest JAR file to <mono>/minecraft/jars</mono> and update <mono>/minecraft/jars/latest</mono> with the downloaded JAR's information. This update will take effect the next time a server instance is started or restarted.</p>


    </main>

</html>
