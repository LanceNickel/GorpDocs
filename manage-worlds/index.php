<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Manage Worlds - Gorp Docs</title>
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

        <h1>Manage Worlds</h1>

        <p>Server instances can have many worlds. Worlds are the actual game environment the players experience, and contain player data, advancements, and other such game features.</p>

        <div class="box blue">Each server instance has an <strong>active</strong> world. The active world is the one that is run when the server is started. It is also the world that is backed up or archived if <code>backup-world</code> or <code>archive-world</code> are run.</div>

        <a class="no-underline" href="/manage-worlds/create-and-delete/">
            <div class="option-button">
                <span class="subsection">Create, Delete, & Reset</span>
                <span class="description">Create, delete, and regenerate worlds in a server instance.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/switch-worlds/">
            <div class="option-button">
                <span class="subsection">Switch Worlds</span>
                <span class="description">Switch the world a server will load when started.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/backup/">
            <div class="option-button">
                <span class="subsection">Backup</span>
                <span class="description">Backup the active world in a server instance.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-worlds/archive/">
            <div class="option-button">
                <span class="subsection">Archive</span>
                <span class="description">Move a world's files out of a server and to long-term storage.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/manage-servers/" class="button">Manage Servers</a>
        <a href="/utilities/" class="button">Utilities</a>


    </main>

</html>
