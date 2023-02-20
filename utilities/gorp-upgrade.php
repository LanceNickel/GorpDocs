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

    <title>Gorp Upgrader - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Utilities
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

        <p>The Gorp upgrader downloads the latest version of Gorp and installs it.</p>

        

        <h2>Upgrade Gorp</h2>

        <pre>gorp upgrade</pre>

        <p>This will install the latest version of Gorp over the current version. All settings in <mono>gorp.conf</mono> and each instance's </mono>run.sh</mono> are preserved.</p>

        <div class="important-box">All Gorp files in /usr/local/bin are OVERWRITTEN. Only settings in the above mentioned files are carried over.</div>


    </main>

</html>
