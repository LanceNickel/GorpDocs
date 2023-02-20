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

    <title>Backup a World - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Worlds
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
