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

    <title>Installation - Gorp Docs</title>

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

        <h1>Install Gorp</h1>

        <p>Installing Gorp is quick and easy. Follow these instructions to be up and running in 5 minutes!</p>


        
        <h2>Install Java 17</h2>

        <ol>
            <li>Run <code>sudo apt update</code></li>
            <li>Run <code>sudo apt install openjdk-17-jdk openjdk-17-jre</code></li>
            <li>Run <code>java --version</code>. You should see something like:</li>
        </ol>

        <pre>openjdk 17.0.5 2022-10-18
OpenJDK Runtime Environment (build 17.0.5+8-Ubuntu-2ubuntu122.04)
OpenJDK 64-Bit Server VM (build 17.0.5+8-Ubuntu-2ubuntu122.04, mixed mode, sharing)</pre>



        <h2>Download and install Gorp</h2>
        
        <ol>        
            <li>SSH into your (soon to be) Minecraft server.</li>
            <li>Go to your home directory: <code>cd</code></li>
            <li>Run <code>git clone https://github.com/LanceNickel/Gorp/ && cd Gorp</code></li>
            <li>Run <code>chmod +x install.sh</code></li>
            <li>Run <code>sudo ./install.sh</code></li>
        </ol>



        <h3 class="red">If you received a warning message</h3>

        <p>During install, the installer script noticed that your computer already has a directory named "minecraft" in the root. Because this could be from a previous install of this utility, or previous use, the installer skips these directories. This is to prevent potential catastrophic data loss.</p>



        <h2>Run the server for the first time</h2>

        <ol>
            <li>Run the server with <code>sudo gorp start server</code></li>
            <li>Stop the server with <code>sudo gorp stop server</code></li>
            <li>Backup the server with <code>sudo gorp backup server</code></li>
        </ol>

        <p>Feel free to delete the <mono>Gorp</mono> directory that was created in your home directory when you Cloned Gorp. We don't need it anymore.</p>



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