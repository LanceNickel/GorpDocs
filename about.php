<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>About Gorp - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        About Gorp

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

        <h1>Gorp makes Minecraft servers easy.</h1>

        <p>By installing one small jumble of shell scripts, day-to-day tasks in a Minecraft server become easy. Gorp creates a simple suite of command line tools for Linux Minecraft server hosts. It automates daily tasks such as server state management, backups, updates, and other features. It is built to handle multiple server instances natively, allowing managing two or more instances even simpler.</p>

        <p>Gorp was built with one purpose: Simplicity. Gorp is not a fancy user interface and it does not have a million options. Gorp takes seconds to download, install, and update. It has a very light footprint, and when uninstalled, leaves no traces. It is quite literally just a bunch of shell scripts to automate daily tasks.</p>



        <h2>What Gorp Does</h2>

        <ul>
            <li>Start and stop server instances</li>
            <li>Manage server instances</li>
            <li>Manage worlds</li>
            <li>Back up and restore world files</li>
            <li>Keep all instance JAR files up-to-date</li>
            <li>Downloads JAR files</li>
            <li>Updates itself</li>
        </ul>



        <h2>Gorp Files Location</h2>

        <p>Gorp installs to or creates these directories:</p>

        <div class="table-container">
            <table class="minx">
                <tr>
                    <th width="200px">Location</th>
                    <th>Contains</th>
                </tr>

                <tr>
                    <td>/usr/local/bin/</td>
                    <td>The Gorp scripts themselves.</td>
                </tr>

                <tr>
                    <td>/usr/local/etc/</td>
                    <td>The Gorp global <a href="/configuration-file/">configuration file</a>.</td>
                </tr>

                <tr>
                    <td>~/gorpmc/</td>
                    <td>Minecraft server files. This is where server instances, worlds, plugins, and other server-related files are stored.</td>
                </tr>
            </table>
        </div>

        <p><strong class="important">Important:</strong> During uninstallation, Gorp will remove the associated files and directories in <mono>/usr/local/</mono>, but does NOT delete the <mono>~/gorpmc/</mono> directory. This must be done manually to force you to think of the potential consequences of your actions while you type the delete command yourself. This directory could contain tons of memories and world files that are not recoverable should it be deleted without a backup being done. I don't want that in my conscience :)</p>
        


    </main>
    
</body>
</html>

    

</body>

</html>
