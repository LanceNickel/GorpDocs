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
        
        <div class="pre-container">
            <pre>gorp start <mono>server</mono> [-y]</pre>
        </div>

        <p>Where, if given, <code>-y</code> auto-accepts the world generation prompt if a world file does not exist yet.</p>



        <h2>Stop a Server</h2>

        <div class="pre-container">
            <pre>gorp stop <mono>server</mono> [fast|now]</pre>
        </div>

        <p>Where, if given:</p>

        <ul>
            <li><code><mono>fast</mono></code> Skips backup.</li>
            <li><code><mono>now</mono></code> Skips backup and warning (immediate safe shutdown).</li>
        </ul>



        <h2>Restarting a Server</h2>

        <div class="pre-container">
            <pre>gorp restart <mono>server</mono> [fast|now]</pre>
        </div>

        <p>Restarting a server behaves just like stopping an instance, except it is started back up.</p>


    </main>

</html>
