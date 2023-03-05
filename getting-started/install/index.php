<!DOCTYPE html>


<?php
require_once('../../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Install on Fedora - Gorp Docs</title>
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

        <p>Gorp should work on pretty much any Linux distribution that has a recent version of Bash. Gorp is tested on Fedora and Ubuntu.</p>

        <h2>Instructions</h2>

        <p>Please follow the instructions tailored for your distribution's package manager.</p>

        <ul>
            <li><a href="/getting-started/install/dnf/">Distros with DNF</a></li>
            <li><a href="/getting-started/install/apt/">Distros with APT</a></li>
            <li><a href="/getting-started/install/yum/">Distros with YUM</a></li>
            <li><a href="/getting-started/install/zypper/">Distros with Zypper</a></li>
        </ul>



        <h2>Requirements</h2>

        <ul>
            <li>8GB of RAM (for decent Minecraft server performance)</li>
            <li>50GB available disk space (for world saves and local backups)</li>
            <li>Debian (or Debian-based) or Fedora</li>
        </ul>



        <h2>Notices</h2>
        
        <p>You will install/update the following packages during installation.</p>

        <ul>
            <li>curl</li>
            <li>wget</li>
            <li>jq</li>
            <li>screen</li>
        </ul>


    </main>

</html>



    </main>
    
</html>
