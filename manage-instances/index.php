<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Manage Instances - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Instances

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-instances'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Manage Instances</h1>

        <p>A server instance is an individual Minecraft server. A server instance may have <a href="/manage-worlds/">many worlds</a>, and contains individual plugins, world files, properties, and more).</p>

        <a class="no-underline" href="/manage-instances/create-and-delete/">
            <div class="option-button">
                <span class="subsection">Create & Delete</span>
                <span class="description">Create and delete individual server instances.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-instances/start-and-stop/">
            <div class="option-button">
                <span class="subsection">Start & Stop</span>
                <span class="description">Start and stop the Minecraft server in individual server instances.</span>
            </div>
        </a>

        <a class="no-underline" href="/manage-instances/instance-settings/">
            <div class="option-button">
                <span class="subsection">Instance Settings</span>
                <span class="description">Each server instance can be customized for optimized performance.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/manage-worlds/" class="button">Manage Worlds</a>
        <a href="/utilities/" class="button">Utilities</a>
        <a href="/configuration-file/" class="button">Configuration File</a>


    </main>

</html>
