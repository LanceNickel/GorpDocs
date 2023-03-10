<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Start & Stop Servers - Gorp Docs</title>
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

        <h1>Start & Stop Server Instances</h1>

        <p>Server instances can be started in the background and stopped just as easliy.</p>



        <h2>Start a Server</h2>
        
        <pre>gorp start <em>server</em> [-y]</pre>

        <p>This starts an instance in the background, via the Screen utility. You can access the server instance at any time by using <code>screen -r <em>server</em></code>.</p>

        <p>Using the "y" flag will auto accept the "generate world" question. This question will appear if you are starting a server instance where the active world hasn't been generated yet.</p>



        <h2>Stop a Server</h2>

        <pre>gorp stop <em>server</em> [-f | -n]</pre>

        <p>This will take a backup of the world files, send a warning message and wait 30 seconds, then shut down the server. Optional flags can be used to change the shutdown behaviour:</p>

        <ul>
            <li><strong><mono>f</mono>:</strong> This will skip the backup and only give a 30 second warning.</li>
            <li><strong><mono>n</mono>:</strong> This will immediately shut the server down.</li>
        </ul>



        <h2>Restarting a Server</h2>

        <pre>gorp restart <em>server</em> [-f | -n]</pre>

        <p>Restarting a server behaves just like stopping an instance, except it is started back up.</p>


    </main>

</html>
