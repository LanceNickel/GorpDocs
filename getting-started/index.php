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

    <title>Getting Started - Gorp Docs</title>

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

        <h1>Getting Started</h1>

        <p>The Getting Started topic contains some important first-time information. These are quick reads but will get you running and familiar with Gorp.</p>

        <a class="no-underline" href="/getting-started/terminology/">
            <div class="option-button">
                <span class="subsection">Terminology</span>
                <span class="description">Some key terms used throughout this documentation.</span>
            </div>
        </a>

        <a class="no-underline" href="/getting-started/install/">
            <div class="option-button">
                <span class="subsection">Install</span>
                <span class="description">Installing Gorp is quick and easy. This is about a 5 minute read.</span>
            </div>
        </a>

        <a class="no-underline" href="/getting-started/uninstall/">
            <div class="option-button">
                <span class="subsection">Uninstall</span>
                <span class="description">As fast as Gorp installs, it uninstalls twice as fast.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/command-reference/" class="button">Command Reference</a>
        <a href="/configuration-file/" class="button">Configuration File</a>


    </main>

</html>
