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

        <p>The backup utility will back up a server's active world to the backup destination as set in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Backing Up</h2>

        <div class="pre-container">
            <pre>gorp backup-world <mono>server</mono></pre>
        </div>



        <h2>Restoring</h2>

        <div class="pre-container">
            <pre>gorp restore-world <mono>server</mono></pre>
        </div>


    </main>

</html>
