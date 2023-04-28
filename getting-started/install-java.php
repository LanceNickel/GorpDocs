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

        <h1>Install Java</h1>

        <p>If you do not already have Java installed, follow these instructions to install the Amazon Correto OpenJDK distro.</p>



        <h2>deb (Debian, Ubuntu, etc.)</h2>

        <p class="p-spacing">Install dependencies</p>

        <div class="command-block">
            <code id="c1" class="copy">sudo apt update</code>
            <code id="c2" class="copy">sudo apt install -y software-properties-common ca-certificates apt-transport-https gnupg curl</code>
        </div>

        <p class="p-spacing">Import Amazon's public key and add the apt repository.</p>

        <div class="command-block">
            <code id="c3" class="copy">curl https://apt.corretto.aws/corretto.key | sudo apt-key add -</code>
            <code id="c4" class="copy">sudo add-apt-repository 'deb https://apt.corretto.aws stable main'</code>
        </div>

        <p class="p-spacing">Now, install Java.</p>

        <div class="command-block">
            <code id="c5" class="copy">sudo apt update</code>
            <code id="c6" class="copy">sudo apt-get install -y java-17-amazon-corretto-jdk libxi6 libxtst6 libxrender1</code>
        </div>



        <h2>rpm (Fedora, CentOS, RHEL, openSUSE, etc.)</h2>

        <h3>DNF</h3>

        <div class="command-block">
            <code id="c7" class="copy">sudo rpm --import https://yum.corretto.aws/corretto.key</code>
            <code id="c8" class="copy">sudo curl -Lo /etc/yum.repos.d/corretto.repo https://yum.corretto.aws/corretto.repo</code>
            <code id="c9" class="copy">sudo dnf -y install java-17-amazon-corretto-devel</code>
        </div>


        <h3>Zypper</h3>

        <div class="command-block">
            <code id="c10" class="copy">sudo zypper addrepo https://yum.corretto.aws/corretto.repo</code>
            <code id="c11" class="copy">sudo zypper refresh</code>
            <code id="c12" class="copy">sudo zypper install java-17-amazon-corretto-devel</code>
        </div>


        <h3>YUM</h3>

        <div class="command-block">
            <code id="c13" class="copy">sudo rpm --import https://yum.corretto.aws/corretto.key</code>
            <code id="c14" class="copy">sudo curl -Lo /etc/yum.repos.d/corretto.repo https://yum.corretto.aws/corretto.repo</code>
            <code id="c15" class="copy">sudo yum -y install java-17-amazon-corretto-devel</code>
        </div>




    </main>

</html>
