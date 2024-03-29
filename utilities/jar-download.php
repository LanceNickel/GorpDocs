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

        <p>The JAR downloader can be used to download JARS from a URL, or a Paper JAR for a particular Minecraft version.</p>

        <p>This will NOT set the JAR for any server instance, though. Edit a server instance's JAR file by using <a class="no-underline" href="../manage-servers/server-settings.php"><code>gorp config <mono>server</mono></code></a>.</p>



        <h2>Download by URL</h2>

        <div class="pre-container">
            <pre>gorp get-jar -u <mono>url</mono></pre>
        </div>

        <p>This will download the JAR file in the link and will put it in <mono>~/gorpmc/jars/</mono>.</p>

        
        <h3 class="important">IMPORTANT NOTICES:</h3>

        <ul>
            <li>The server must have a bukkit-like world structure, with three separate world directories.</li>
            <li>Vanilla JARs are not supported yet.</li>
            <li>The provided download URL must be a .jar file, not an archive (zip/tarball, etc).</li>
            <li>By downloading potentially untested software, you acknowledge that Gorp may not behave as expected and may cause unexpected file loss or extreme amounts of inconvenience.</li>
        </ul>

        <h4>Tested versions:</h4>

        <ul>
            <li><strong>CraftBukkit</strong> 1.0.0 - 1.19.3</li>
            <li><strong>Spigot</strong> 1.4.6 - 1.19.3</li>
            <li><strong>Paper</strong> 1.8.8 - 1.19.3 (Gorp default)</li>
        </ul>  
        
        
        
        <h2>Download by Version</h2>

        <div class="pre-container">
            <pre>gorp get-jar -v <mono>version</mono></pre>
        </div>

        <p>This will download the latest stable Paper JAR file for the game version to <mono>~/gorpmc/jars/</mono>.</p>



        <h3>Supported versions</h3>

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
                    <li>1.15.1</li>
                </ul>
            </div>

            <div class="col">
                <ul>
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
                    <li>1.19.4</li>
                    <li>1.20</li>
                    <li>1.20.1</li>
                </ul>
            </div>
        </div>



    </main>

</html>
