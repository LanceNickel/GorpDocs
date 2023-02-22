<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= stylesheet(); ?>

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Switch Worlds - Gorp Docs</title>

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

        <h1>Switch Worlds</h1>

        <p>Switching the world a server instance will load is simple. An instance's active world is also the world which will be backed up when using the backup tool.</p>

        

        <h2>Switch an Instance's Active World</h2>

        <pre>gorp switch-world <em>server</em> [<em>world</em>]</pre>

        <p>This will switch the active world in <em><mono>server</mono></em> to the world specified, in this case: <em><mono>world</mono></em>.</p>

        <p>If the world name is not specified, Gorp will show a list of options and ask for a world name.</p>


    </main>

</html>
