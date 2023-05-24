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

        <h3>openSUSE</h3>
        <p>Run <code id="c3" class="copy">curl -s https://gorp.lanickel.com/installers/opensuse | bash</code>
        <br />
        <a href="/installers/opensuse" target="_blank">inspect this source</a></p>

        <p><em>This site is monitored by an integrity program and will immediately be taken offline if it is tampered with. However, you should never blindly run a script from the internet. Use the inspect links to ensure the scripts are doing what they should.</em></p>



        <h2>Download Gorp</h2>
        <p>This is the portable Gorp installer. It assumes you already have Gorp's dependencies installed and does not touch your package manager. Use install.sh to install Gorp.</p>

        <a class="button blue" href="/latest.tar.gz">Download Gorp (tar-gz)</a>

        <div class="table-container">
            <table>
                <tr>
                    <th colspan="2">Verification</th>
                </tr>

                <tr>
                    <td>sha256</td>
                    <td><code id="c4" class="copy">fd158e916a959c27905e1c87bf38242cf1af6f72ba7d540ad397317b05727f0a</code></td>
                </tr>

                <tr>
                    <td>md5</td>
                    <td><code id="c5" class="copy">08b5e116ec791cc5f03c6dfdf7954823</code></td>
                </tr>
            </table>
        </div>


    </main>

</html>
