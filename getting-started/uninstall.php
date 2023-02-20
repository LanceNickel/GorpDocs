<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/0/styles/style.css" rel="stylesheet">

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Uninstall - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Getting Started
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

        <p>Gorp uninstalls cleanly and leaves no weird files behind. <strong class="red">Gorp will not remove ANY Minecraft related files.</strong> Minecraft related files need to be removed manually. This is to prevent any unintentional catastrophic data loss.</p>



        <h2>Download the Gorp Uninstaller</h2>
        
        <ol>        
            <li>SSH into your Minecraft server.</li>
            <li>Go to your home directory: <code>cd</code></li>
            <li>Run <code>git clone https://github.com/LanceNickel/Gorp/ && cd Gorp</code></li>
            <li>Run <code>chmod +x uninstall.sh</code></li>
            <li>Run <code>sudo ./uninstall.sh</code></li>
        </ol>

        <p>Feel free to delete the <mono>Gorp</mono> directory that was created in your home directory when you Cloned Gorp. We don't need it anymore.</p>

        <p>Gorp is now uninstalled.</p>


    </main>

</html>



    </main>
    
</html>
