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

        Manage Worlds

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-worlds'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Backup a World</h1>

        <p>The backup utility will back up an instance's active world to the backup destination as set in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Backing Up</h2>

        <pre>gorp backup-world <em>server</em></pre>

        <p>This will backup the active world in the server instance named <em><mono>server</mono></em>.</p>



        <h2>Restoring</h2>

        <pre>gorp restore-world <em>server</em></pre>

        <p>This will ask you to select a world file, and allow you to choose from the set of dates and times the world was backed up. Once run, the restoration utility will backup the world in its current state and restore the selected backup file.</p>


    </main>

</html>
