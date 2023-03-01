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

        <p>Gorp uninstalls cleanly and leaves no weird files behind. <strong class="important">Gorp will not remove ANY Minecraft related files.</strong> Minecraft related files need to be removed manually. This is to prevent any unintentional catastrophic data loss.</p>



        <h2>Download the Gorp Uninstaller</h2>
        
        <ol>        
            <li>SSH into your Minecraft server.</li>
            <li>Go to your home directory: <code>cd</code></li>
            <li>Run <code>git clone https://github.com/LanceNickel/Gorp/ && cd Gorp</code></li>
            <li>Run <code>chmod +x uninstall.sh</code></li>
            <li>Run <code>./uninstall.sh</code></li>
        </ol>

        <p>Feel free to delete the <mono>Gorp</mono> directory that was created in your home directory when you Cloned Gorp. We don't need it anymore.</p>

        <p>Gorp is now uninstalled.</p>


    </main>

</html>



    </main>
    
</html>
