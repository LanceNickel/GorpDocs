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

    <title>Archive a World - Gorp Docs</title>

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

        <h1>Archive a World</h1>

        <p>The archive utility works similarly to the backup utility, and will move a world archive to the destination set in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Archive a World</h2>

        <pre>gorp archive-world <em>server</em> [<em>world</em>]</pre>

        <p>This will archive the world files for <em><mono>world</mono></em> in the server instance named <em><mono>server</mono></em>.</p>

        <p><strong class="red">There is no world archive restoration utility.</strong> Unlike backups, there is no tool to restore world archives. This is because world archives are intended to be used as long-term storage for historical data. There are many server operators who wish to store historical world archives in a separate location, and this utility provides this functionality.</p>


    </main>

</html>
