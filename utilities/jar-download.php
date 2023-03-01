<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>JAR Downloader - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Utilities

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('utilities'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>JAR Downloader</h1>

        <p>The JAR downloader will download the Paper Server JAR file for the specified Minecraft game version.</p>

        <div class="box red">The PaperMC team only maintains Paper for the latest version of Minecraft. Using older versions of Minecraft is considered less secure, as security flaws and other such bugs will not be addressed.</div>



        <h2>Download a Server JAR</h2>

        <pre>gorp get-jar <em>version</em></pre>

        <p>This will download the latest stable JAR file for the game version to <mono>~/gorpmc/jars/</mono>. This will NOT set the JAR for any server instance, though. This must be done by configuring an <a href="/manage-instances/instance-settings/">instance's settings</a>.</p>



        <h2>Supported Game Versions</h2>
        
        <p>Gorp only supports the versions of Minecraft that Paper does, so these versions of Minecraft can be downloaded:</p>

        <div class="listcols">
            <div class="col">
                <ul>
                    <li>1.8.8</li>
                    <li>1.9.4</li>
                    <li>1.10.2</li>
                    <li>1.11.2</li>
                    <li>1.12</li>
                    <li>1.12.1</li>
                    <li>1.12.2</li>
                    <li>1.13-pre7</li>
                    <li>1.13</li>
                    <li>1.13.1</li>
                    <li>1.13.2</li>
                    <li>1.14</li>
                    <li>1.14.1</li>
                    <li>1.14.2</li>
                    <li>1.14.3</li>
                    <li>1.14.4</li>
                    <li>1.15</li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li>1.15.1</li>
                    <li>1.15.2</li>
                    <li>1.16.1</li>
                    <li>1.16.2</li>
                    <li>1.16.3</li>
                    <li>1.16.4</li>
                    <li>1.16.5</li>
                    <li>1.17</li>
                    <li>1.17.1</li>
                    <li>1.18</li>
                    <li>1.18.1</li>
                    <li>1.18.2</li>
                    <li>1.19</li>
                    <li>1.19.1</li>
                    <li>1.19.2</li>
                    <li>1.19.3</li>
                </ul>
            </div>
        </div>



    </main>

</html>
