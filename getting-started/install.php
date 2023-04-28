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

        <p>Use the install scripts below to get Gorp on your system. You may also download the portable installer.</p>



        <h2>Install Gorp</h2>

        <p class="box red">These install scripts automatically update/install Gorp's dependencies. <a href="/getting-started/requirements/">Learn more</a>.</p>

        <h3>Debian/Ubuntu</h3>
        <p>Run <code id="c1" class="copy">curl -s https://gorp.lanickel.com/installers/debian | bash</code>
        <br />
        <a href="/installers/debian" target="_blank">inspect this source</a></p>

        <h3>Fedora/RHEL</h3>
        <p>Run <code id="c2" class="copy">curl -s https://gorp.lanickel.com/installers/rhel | bash</code>
        <br />
        <a href="/installers/rhel" target="_blank">inspect this source</a></p>

        <p><em>This site is monitored by an integrity program and will immediately be taken offline if it is tampered with. However, you should never blindly run a script from the internet. Use the inspect links to ensure the scripts are doing what they should.</em></p>



        <h2>Download Gorp</h2>
        <p>This is the portable Gorp installer. It assumes you already have Gorp's dependencies installed and does not touch your package manager. Use install.sh to install Gorp.</p>

        <a class="button blue" href="/latest.tar.gz">Download Gorp (tar-gz)</a>

        <table>
            <tr>
                <th colspan="2">Verification</th>
            </tr>

            <tr>
                <td>sha256</td>
                <td><code id="c3" class="copy">e849d46b8e157dd696012fb818f317e5c5ec9dba1a4a0b3af6d2387502b366fb</code></td>
            </tr>

            <tr>
                <td>md5</td>
                <td><code id="c4" class="copy">0ac146c3302ea55b3249859916e54de6</code></td>
            </tr>
        </table>


    </main>

</html>
