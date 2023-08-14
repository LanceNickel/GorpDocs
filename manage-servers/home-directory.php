<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Home Directory - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Server Instances

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-servers'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Home Directory</h1>

        <p>Gorp creates a folder named <mono>gorpmc</mono> in the home directory of the user who installed Gorp. This folder contains the server-related files such as worlds, plugins, jars, and much more.</p>



        <h2>Home Directory Contents</h2>        
        
        <div class="table-container">
            <table>
                <tr>
                    <th>Directory</th>
                    <th>Contents</th>
                </tr>

                <tr>
                    <td>archives</td>
                    <td>The archives directory contains world archives created when a <a href="/manage-worlds/archive/">world is archived</a>. The archives are stored in folders for each server instance.</td>
                </tr>

                <tr>
                    <td>backups</td>
                    <td>The backups directory contains server world files copied over when <a href="/manage-worlds/backup">backing up a world</a>. The backups are stored in folders for each server instance.</td>
                </tr>

                <tr>
                    <td>jars</td>
                    <td>The jars directory contains the Minecraft server Java programs (JARs).</td>
                </tr>

                <tr>
                    <td>servers</td>
                    <td>The servers folder contains all the server instances themselves. A server instance is inside a folder with it's name. So, a server instance named "public" would be stored in <mono>servers/public</mono>. Server instances contain a lot of files, including configuration files, plugin files, <a href="/manage-worlds/">world files</a>, and the <a href="/manage-servers/server-settings/">run.sh</a> file.</td>
                </tr>
            </table>
        </div>



        <h2>Changing the Home Directory</h2>

        <div class="pre-container">
            <pre>gorp move-home <mono>path</mono></pre>
        </div>

        <p>Where <code><mono>path</mono></code> is the absolute path to the new directory.</p>


    </main>

</html>
