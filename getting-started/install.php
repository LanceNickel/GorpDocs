<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Installation - Gorp Docs</title>
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

        <h1>Install Gorp</h1>

        <p>Installing Gorp is quick and easy. Follow these instructions to be up and running in 5 minutes!</p>


        
        <h2>Install Java 17</h2>

        <ol>
            <li>Run <code>sudo apt update</code></li>
            <li>Run <code>sudo apt install openjdk-17-jdk openjdk-17-jre</code></li>
            <li>Run <code>java --version</code>. You should see something like:</li>
        </ol>

        <div class="pre-container">
            <pre>openjdk 17.0.5 2022-10-18
OpenJDK Runtime Environment (build 17.0.5+8-Ubuntu-2ubuntu122.04)
OpenJDK 64-Bit Server VM (build 17.0.5+8-Ubuntu-2ubuntu122.04, mixed mode, sharing)</pre>
        </div>



        <h2>Download and Install Gorp</h2>
        
        <ol>        
            <li>SSH into your (soon to be) Minecraft server.</li>
            <li>Go to your home directory: <code>cd</code></li>
            <li>Run <code>git clone https://github.com/LanceNickel/Gorp/ && cd Gorp</code></li>
            <li>Run <code>chmod +x install.sh</code></li>
            <li>Run <code>sudo ./install.sh</code></li>
        </ol>



        <h3 class="important">If you received a warning message</h3>

        <p>During install, the installer script noticed that your computer already has a directory named "minecraft" in the root. Because this could be from a previous install of this utility, or previous use, the installer skips these directories. This is to prevent potential catastrophic data loss.</p>



        <h2>Run Your First Server</h2>

        <ol>
            <li>Create a server using <code>sudo gorp create-server <em>server</em> [<em>world</em>]</code>, replacing <em><mono>server</mono></em> and <em><mono>world</mono></em> with a server and world name you want to use.</li>
            <li>Run <code>sudo gorp start <em>server</em></code> to start your server.</li>
            <li>Run <code>sudo gorp stop <em>server</em></code> to stop the server.</li>
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
