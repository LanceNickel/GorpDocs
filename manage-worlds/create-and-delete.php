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
            <pre>gorp create-world <em>server</em> [<em>world</em>]</pre>
        </div>

        <p>This will create a world named <em><mono>world</mono></em> in the server instance named <em><mono>server</mono></em>.</p>

        <p>If the world name is not specified, Gorp will ask for a world name.</p>

        <div class="box red inline">World names may NOT have spaces or special characters in them.</div>



        <h2>Delete a World</h2>

        <div class="pre-container">
            <pre>gorp delete-world <em>server</em> [<em>world</em>]</pre>
        </div>

        <p>This will delete the world named <em><mono>world</mono></em> in the server instance named <em><mono>server</mono></em>.</p>

        <p>If the world name is not specified, Gorp will show a list of options and ask for you to enter a world name.</p>

        <p><strong class="important">This action is irreversible!</strong> Ensure you have a backup of the world. Gorp will force you to confirm you are deleting the intended world.</p>



        <h2>Rename a World</h2>

        <div class="pre-container">
            <pre>gorp rename-world <em>server</em> [<em>current name</em>] [<em>new name</em>]</pre>
        </div>

        <p>This will rename the world. Any time you need to reference this world, use the new name. The folder names are changed as well.</p>

        <p>If the world is the "active" world, meaning it is set in server.properties, server.properties will also be automatically updated.</p>



        <h2>Reset a World</h2>
        
        <div class="pre-container">
            <pre>gorp reset-world <em>server</em></pre>
        </div>

        <p>This will delete and regenerate the active world in the server instance named <em><mono>server</mono></em>.</p>

        <p>This tool is useful for pulling a <em>Mulligan</em>, or to start over if another generated world was bad (such as a remote island).</p>

        <p><strong class="important">This action is irreversible!</strong> Ensure you have a backup of the active world. Gorp will force you to confirm you are regenerating the intended world.</p>


    </main>

</html>
