<!DOCTYPE html>


<?php
require_once('../../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Install Gorp (APT) - Gorp Docs</title>
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

        <h1>Install Gorp <div class="box green tag">APT</div></h1>

        <p>Install Gorp on Debain, Ubuntu, Mint, etc.</p>


        
        <h2>Install Java 17</h2>

        <ol>
            <li>Run <code>sudo apt update</code></li>
            <li>Run <code>sudo apt install openjdk-17-jdk openjdk-17-jre</code></li>
        </ol>

        <h3>Verify Java installed correctly</h3>
        
        <p>Run <code>java --version</code>. You should see something like:</p>

        <div class="pre-container">
            <pre>openjdk 17.0.5 2022-10-18
OpenJDK Runtime Environment (build 17.0.5+8-Ubuntu-2ubuntu122.04)
OpenJDK 64-Bit Server VM (build 17.0.5+8-Ubuntu-2ubuntu122.04, mixed mode, sharing)</pre>
        </div>



        <h2>Download and Install Gorp</h2>
        
        <ol>        
            <li>SSH into your (soon to be) Minecraft server.</li>
            <li>Go to your home directory: <code>cd</code></li>
            <li>Run <code>sudo apt update</code></li>
            <li>Run <code>sudo apt install -y curl wget jq screen</code></li>
            <li>Download Gorp: <code>wget https://github.com/LanceNickel/Gorp/archive/refs/tags/v<?= ver(); ?>.tar.gz</code></li>
            <li>Unarchive Gorp & cd: <code>tar -xf v<?= ver(); ?>.tar.gz && cd Gorp-<?= ver(); ?></code></li>
            <li>Run the installer: <code>chmod +x install.sh && ./install.sh</code></li>
            <li>Clean up: <code>rm v<?= ver(); ?>.tar.gz && rm -rf Gorp-<?= ver(); ?></code></li>
        </ol>



        <h3 class="important">If you received a warning message</h3>

        <p>During install, Gorp noticed that you already have a folder at ~/gorpmc. Gorp skips creating the folder and moving files inside to prevent any accidentail data loss. If these files are no longer needed or have been backed up, delete the folder and uninstall gorp with: <code>chmod +x uninstall.sh && ./uninstall.sh</code>. Then re-install Gorp.</p>



        <h2>Run Your First Server</h2>

        <ol>
            <li>Create a server using <code>gorp create-server <em>server</em> [<em>world</em>]</code>&mdash;replacing <em><mono>server</mono></em> and <em><mono>world</mono></em> with a server and world name you want to use.</li>
            <li>Run <code>gorp start <em>server</em></code> to start your server.</li>
            <li>Run <code>gorp stop <em>server</em></code> to stop the server.</li>
        </ol>



        <h2>Read Next</h2>

        <a class="no-underline" href="/command-reference/">
            <div class="option-button">
                <span class="subsection">Command Reference</span>
                <span class="description">See what Gorp can do.</span>
            </div>
        </a>


    </main>

</html>



    </main>
    
</html>
