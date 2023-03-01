<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Create & Delete Server Instances - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Server Instances

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-servers'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Create & Delete Server Instances</h1>

        <p>Using multiple servers allows for different worlds and game versions to be played with ease. Use cases for multiple server instances would be hosting a public server, while also hosting a smaller "friends only" private server.</p>

        
        
        <h2>Create a Server</h2>

        <pre>gorp create-server <em>server</em> [<em>world</em>]</pre>

        <p>This will create a server directory in <mono>~/gorpmc/servers</mono>. The world name will be set on first run.</p>

        <p>If a world name is not specified, an world named <mono>default</mono> will be created.</p>



        <h2>Delete a Server</h2>

        <pre>gorp delete-server <em>server</em></pre>

        <p>This will delete a server's files. <strong class="important">This action is irreverisble. Ensure you have a backup of the server instance's files!</strong></p>


    </main>

</html>
