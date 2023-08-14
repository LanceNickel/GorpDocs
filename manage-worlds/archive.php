<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Archive a World - Gorp Docs</title>
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

        <h1>Archive a World</h1>

        <p>The archive utility works similarly to the backup utility, and will move a world archive to the destination set in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Archive a World</h2>

        <div class="pre-container">
            <pre>gorp archive-world <mono>server</mono> [<mono>world</mono>]</pre>
        </div>

        <p><strong class="important">There is no world archive restoration utility.</strong> Unlike backups, there is no tool to restore world archives. This is because world archives are intended to be used as long-term storage for historical data.</p>


    </main>

</html>
