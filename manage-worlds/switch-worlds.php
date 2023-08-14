<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Switch Worlds - Gorp Docs</title>
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

        <h1>Switch Worlds</h1>

        <p>Switch a server's active world. The <strong>active world</strong> of a server is the world that will be loaded when the server is started. It will also be the world that is backed up or re-generated when other world management commands are run.</p>

        <div class="pre-container">
            <pre>gorp switch-world <mono>server</mono> [<mono>world</mono>]</pre>
        </div>

        <p>Where, if passed, <code><mono>world</mono></code> is the desired world to activate.</p>


    </main>

</html>
