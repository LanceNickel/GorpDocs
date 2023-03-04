<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Manage Servers - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Server Instances

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-servers'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Manage Server Instances</h1>

        <p>Server instances are individual Minecraft servers. Each server instance contains the files created and used by the Minecraft server&mdash;like workds, plugins, properties, whitelist, and more. Server instances are located in <mono>~/gorpmc/servers/</mono>.</p>

        <a class="no-underline" href="/manage-servers/create-and-delete/">
            <div class="option-button">
                <span class="subsection">Create & Delete</span>
                <span class="description">Create and delete individual server instances.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-servers/start-and-stop/">
            <div class="option-button">
                <span class="subsection">Start & Stop</span>
                <span class="description">Start and stop the Minecraft server in individual server instances.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-servers/server-settings/">
            <div class="option-button">
                <span class="subsection">Server Settings</span>
                <span class="description">Override the global settings for an individual instance.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-servers/backup/">
            <div class="option-button">
                <span class="subsection">Server Backup</span>
                <span class="description">Backup and restore entire server instances. This may take a while!</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-servers/home-directory/">
            <div class="option-button">
                <span class="subsection">Home Directory</span>
                <span class="description">Where the Gorp server instance files are stored.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/manage-worlds/" class="button">Manage Worlds</a>
        <a href="/utilities/" class="button">Utilities</a>
        <a href="/configuration-file/" class="button">Configuration File</a>


    </main>

</html>
