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

    <title>Create & Delete Worlds - Gorp Docs</title>

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

        <h1>Create & Delete Worlds</h1>

        <p>Each server instance can have many worlds. Creating and deleting worlds can be done per-instance with ease.</p>



        <h2>Create a World</h2>

        <pre>gorp create-world <em>server</em> [<em>world</em>]</pre>

        <p>This will create a world named <em><mono>world</mono></em> in the server instance named <em><mono>server</mono></em>.</p>

        <p>If the world name is not specified, Gorp will ask for a world name.</p>

        <div class="important-box">World names may NOT have spaces or special characters in them.</div>



        <h2>Delete a World</h2>

        <pre>gorp delete-world <em>server</em> [<em>world</em>]</pre>

        <p>This will delete the world named <em><mono>world</mono></em> in the server instance named <em><mono>server</mono></em>.</p>

        <p>If the world name is not specified, Gorp will show a list of options and ask for you to enter a world name.</p>

        <p><strong class="red">This action is irreversible!</strong> Ensure you have a backup of the world. Gorp will force you to confirm you are deleting the intended world.</p>


    </main>

</html>
