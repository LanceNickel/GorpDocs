<!DOCTYPE html>


<?php
require_once('0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/0/styles/style.css" rel="stylesheet">

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Command Reference - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Command Reference
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

        <p>Gorp was built with one purpose: Simplicity. Gorp is not a fancy user interface and it does not have a million options. Gorp takes seconds to download, install, and update. It has a very light footprint, and when uninstalled, leaves no traces. Hell, it's literally just a bunch of shell scripts to automate daily tasks.</p>



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



        <h2>How Gorp Works</h2>

        <p>Gorp, as just a bunch of shell scripts, is very simple in its functionality. However, there are some hierarchical ways that Gorp works. I created a "launcher, action, worker" model, where:</p>

        <ol>
            <li>The user calls the launcher using the <code>gorp</code> command.</li>
            <li>The launcher calls the appropriate action script based on the user's action (such as <mono>stop</mono> or <mono>backup-world</mono>).</li>
            <li>The action script then does a little bit of setup work, and then coordinates the execution of one or more worker scripts that perform the necessary tasks.</li>
        </ol>



        <h2>Gorp Files Location</h2>

        <p>Gorp installs to or creates these directories:</p>

        <table>
            <tr>
                <th>Location</th>
                <th>Purpose</th>
            </tr>

            <tr>
                <td>/usr/local/bin/</td>
                <td>The main <mono>gorp</mono> launcher script lives here.</td>
            </tr>

            <tr>
                <td>/usr/local/bin/gorputils/</td>
                <td>Created during installation. Contains <mono>action</mono> and <mono>worker</mono> directories to store script files.</td>
            </tr>

            <tr>
                <td>/minecraft/</td>
                <td>Created during installation. Contains <mono>backups</mono>, <mono>jars</mono> and <mono>servers</mono> directories to store server and world files. Also contains a <mono>gorp.conf</mono> configuration file.</td>
            </tr>
        </table>

        <p><strong class="red">Important:</strong> During uninstallation, Gorp will remove the associated files in the <mono>/bin/</mono> directory, but does NOT delete the <mono>/minecraft/</mono> directory. This must be done manually to force you to think of the potential consequences of your actions while you type the delete command yourself. This directory could contain tons of memories and world files that are not recoverable should it be deleted without a backup being done. I don't want that in my conscience :)</p>
        


    </main>
    
</body>
</html>

    

</body>

</html>
