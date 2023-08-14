<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Create, Delete, Rename, & Reset Worlds - Gorp Docs</title>
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

        <h1>Create, Delete, Rename, & Reset Worlds</h1>

        <p>Each server instance can have many worlds. Creating and deleting worlds can be done per-instance with ease.</p>



        <h2>Create a World</h2>

        <div class="pre-container">
            <pre>gorp create-world <mono>server</mono> [<mono>world</mono>]</pre>
        </div>

        <div class="box red subtle inline">World names may NOT have spaces or special characters in them.</div>



        <h2>Delete a World</h2>

        <div class="pre-container">
            <pre>gorp delete-world <mono>server</mono> [<mono>world</mono>]</pre>
        </div>

        <p><strong class="important">This action is irreversible!</strong> Ensure you have a backup of the world.</p>



        <h2>Rename a World</h2>

        <div class="pre-container">
            <pre>gorp rename-world <mono>server</mono> [<mono>WORLD</mono>] [<mono>NEW_NAME</mono>]</pre>
        </div>

        <div class="box red subtle inline">World names may NOT have spaces or special characters in them.</div>



        <h2>Regenerate a World</h2>
        
        <div class="pre-container">
            <pre>gorp reset-world <mono>server</mono></pre>
        </div>

        <p>This will delete and regenerate the active world in specified <code><mono>server</mono></code>.</p>

        <p><strong class="important">This action is irreversible!</strong> Ensure you have a backup of the active world.</p>


    </main>

</html>
