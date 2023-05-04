<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Getting Started - Gorp Docs</title>
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

        <h1>Getting Started</h1>

        <a class="no-underline" href="/getting-started/install/">
            <div class="option-button">
                <span class="subsection">Install</span>
                <span class="description">Use the Gorp installer to install Gorp, or download the portable files.</span>
            </div>
        </a>

        <a class="no-underline" href="/getting-started/uninstall/">
            <div class="option-button">
                <span class="subsection">Uninstall</span>
                <span class="description">All Gorp-related files are removed, but Minecraft files are preserved.</span>
            </div>
        </a>
        
        <a class="no-underline" href="/getting-started/requirements/">
            <div class="option-button">
                <span class="subsection">Requirements</span>
                <span class="description">Learn more about Gorp's system requirements and dependencies.</span>
            </div>
        </a>

        <a class="no-underline" href="/getting-started/install-java/">
            <div class="option-button">
                <span class="subsection">Install Java</span>
                <span class="description">Instructions for installing the JDK for your Distro.</span>
            </div>
        </a>



        <h2>Related Reading</h2>

        <a href="/command-reference/" class="button">Command Reference</a>
        <a href="/configuration-file/" class="button">Configuration File</a>


    </main>

</html>
