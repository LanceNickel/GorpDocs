<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Download & Install - Gorp Docs</title>
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

        <h1>Download & Install Gorp</h1>

        <p>Gorp's installer is the easiest way to get Gorp on your system. Gorp is also portable, though, and you can download the archive with installer.</p>



        <h2>Install Gorp</h2>

        <p class="box red">These installers also automatically update/install Gorp's dependencies. <a href="/getting-started/requirements/">Learn more</a>.</p>

        <h3>Debian/Ubuntu</h3>
        <p>Run <code id="c1" class="copy">wget https://gorp.lanickel.com/installers/debian | bash</code>
        <br />
        <a href="/installers/debian" target="_blank">inspect this source</a></p>

        <h3>Fedora/RHEL</h3>
        <p>Run <code id="c2" class="copy">wget https://gorp.lanickel.com/installers/rhel | bash</code>
        <br />
        <a href="/installers/rhel" target="_blank">inspect this source</a></p>



        <h2>Download Gorp</h2>
        <p>This is the portable version of Gorp. It assumes you already have Gorp's dependencies installed.</p>

        <a class="button blue" href="/latest.tar.gz">Download Gorp (tar-gz)</a>


    </main>

</html>
