<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Switch Worlds - Gorp Docs</title>
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

        <h1>Switch Worlds</h1>

        <p>Switching the world a server instance will load is simple. A server's active world is also the world which will be backed up when using the backup tool.</p>

        

        <h2>Switch a Server's Active World</h2>

        <pre>gorp switch-world <em>server</em> [<em>world</em>]</pre>

        <p>This will switch the active world in <em><mono>server</mono></em> to the world specified, in this case: <em><mono>world</mono></em>.</p>

        <p>If the world name is not specified, Gorp will show a list of options and ask for a world name.</p>


    </main>

</html>
