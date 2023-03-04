<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Uninstall - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Getting Started

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('getting-started'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Uninstall Gorp</h1>

        <p>Gorp uninstalls cleanly and leaves no weird files behind. <strong class="important">Gorp will not remove ANY Minecraft related files in your home direcory.</strong> Minecraft related files need to be removed manually. This is to prevent any unintentional catastrophic data loss.</p>

        <h2>Remove Gorp</h2>

        <p>To remove Gorp, delete the Gorp files:</p>

        <ol>
            <li><code>sudo rm /usr/local/bin/gorp</code></li>
            <li><code>sudo rm -rf /usr/local/bin/gorpmc/</code></li>
            <li><code>sudo rm /usr/local/etc/gorp.conf</code></li>
        </ol>



    </main>

</html>



    </main>
    
</html>
