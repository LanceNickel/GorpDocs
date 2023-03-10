<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Backup a World - Gorp Docs</title>
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

        <h1>Backup a Server</h1>

        <p>The backup utility will back up a server's files to the backup destination as set in the <a href="/configuration-file/">Gorp configuration file</a>.</p>

        <div class="box red">This may take a while! Some server instances may have large world files or multiple worlds. Because the server must be stopped, it may be best to schedule a maintenance period during low usage periods.</div>



        <h2>Backing Up</h2>

        <pre>gorp backup-server <em>server</em></pre>

        <p>This will backup the server instance named <em><mono>server</mono></em>.</p>



        <h2>Restoring</h2>

        <pre>gorp restore-server <em>server</em></pre>

        <p>This will ask you to choose from the set of dates and times the server was backed up. Once run, the restoration utility will backup the server in its current state and restore the selected backup file.</p>


    </main>

</html>
