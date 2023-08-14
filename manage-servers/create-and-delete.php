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

        <div class="pre-container">
            <pre>gorp create-server <mono>server</mono> [<mono>world</mono>]</pre>
        </div>

        <p>Where, if given, <code><mono>WORLD</mono></code> will override the default world name.</p>



        <div class="spacer40"></div>



        <h3>Create for Velocity Proxy</h3>

        <div class="pre-container">
            <pre>gorp create-server <mono>server</mono> [<mono>world</mono>] velocity</pre>
        </div>

        <p>Create a server to be run behind a Velocity proxy, with the settings for modern forwarding. <a target="_blank" href="https://docs.papermc.io/velocity/player-information-forwarding">Learn more</a>.</p>

        <div class="box red">Creating a world with Velocity is only supported for Paper MC, game version 1.18.2 and up. <strong>Gorp will NOT check your game version and the new server will not work properly if you are on a version < 1.18.2.</strong></div>
        <div class="box red subtle">Using this mode without using a Velocity proxy or following security best practices can potentially leave your server vulnerable to attack. Please follow the Paper MC team's recommendations for securing your servers: <a target="_blank" href="https://docs.papermc.io/velocity/security">documentation</a>.</div>



        <h2>Delete a Server</h2>

        <div class="pre-container">
            <pre>gorp delete-server <mono>server</mono></pre>
        </div>

        <p><strong class="important">This action is irreverisble. Ensure you have a backup of the server instance's files!</strong></p>


    </main>

</html>
