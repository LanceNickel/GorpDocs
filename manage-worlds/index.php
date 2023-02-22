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

    <title>Manage Worlds - Gorp Docs</title>

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

        <h1>Manage Worlds</h1>

        <p>Server instances can have many worlds. Worlds are the actual game environment the players experience, and contain player data, advancements, and other such game features.</p>

        <a class="no-underline" href="/manage-worlds/create-and-delete/">
            <div class="option-button">
                <span class="subsection">Create & Delete</span>
                <span class="description">Create and delete worlds in a server instance.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/switch-worlds/">
            <div class="option-button">
                <span class="subsection">Switch Worlds</span>
                <span class="description">Switch the world the instance will load when started.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/backup/">
            <div class="option-button">
                <span class="subsection">Backup</span>
                <span class="description">Backup the currently set world in an instance.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/archive/">
            <div class="option-button">
                <span class="subsection">Archive</span>
                <span class="description">Move a world's files out of an instance and to long-term storage.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/manage-instances/" class="button">Manage Instances</a>
        <a href="/utilities/" class="button">Utilities</a>


    </main>

</html>
