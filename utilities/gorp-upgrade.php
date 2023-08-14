<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Gorp Upgrader - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Utilities

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('utilities'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Gorp Upgrader</h1>

        <p>The Gorp upgrader downloads, verifies, and installs the latest release of Gorp.</p>

        

        <h2>Upgrade Gorp</h2>

        <div class="pre-container">
            <pre>gorp upgrade</pre>
        </div>
        <div class="box blue subtle inline">Gorp will ask for sudo privileges</div>


    </main>

</html>
