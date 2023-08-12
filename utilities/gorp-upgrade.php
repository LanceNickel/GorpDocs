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

        <p>The Gorp upgrader downloads the latest release of Gorp and installs it.</p>

        

        <h2>Upgrade Gorp</h2>

        <div class="pre-container">
            <pre>gorp upgrade</pre>
        </div>

        <p>This will install the latest version of Gorp over the current version. All settings in <mono>gorp.conf</mono> and each server instance's <mono>run.sh</mono> are preserved.</p>

        <div class="box red inline">All Gorp files in /usr/local/bin are OVERWRITTEN. Only settings in the above mentioned files are carried over.</div>
        <div></div>
        <div class="box blue subtle inline">Gorp will ask for sudo privileges</div>


    </main>

</html>
