<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Server Settings - Gorp Docs</title>
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

        <h1>Server Settings</h1>

        <p>Servers may be customized further by editing the <mono>run.sh</mono> file in each server's directory.</p>



        <h2>Launch/Resource Settings</h2>

        <p>The <mono>run.sh</mono> file is located in a server's directory. Server instance directories are located in <mono>~/gorpmc/servers/</mono>.</p>

        <p>The upper portion of the file contains customizable options. These options, when left uncustomized, will inherit the settings in the <a href="/configuration-file/">Gorp configuration file</a>.</p>

        <div class="table-container">
            <table>
                <tr>
                    <th>Option</th>
                    <th>Expected Value</th>
                    <th>Default Value</th>
                    <th>Example Value</th>
                </tr>
                <tr>
                    <td>JAR</td>
                    <td>Absolute path to a JAR file. For JARs downloaded with <code>get-jar</code> use:<br><mono>$HOMEDIR/jars/[version].jar</td>
                    <td><mono>$LATEST_JAR</mono></td>
                    <td>$HOMEDIR/jars/1.18.2.jar</td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>The amount of RAM to allocate to the server, in gigabytes.</td>
                    <td><mono>$RAM</mono></td>
                    <td>8G</td>
                </tr>
            </table>
        </div>



        <h2>Changing server.properties</h2>

        <div class="pre-container">
            <pre>gorp prop <em>server</em> <em>key</em> <em>value</em></pre>
        </div>

        <p>Where <code>key</code> is the property name (like <mono>difficulty</mono>) and <code>value</code> is the new value (like <mono>hard</mono>).</p>

        <div class="box red subtle">At the moment, <code>key</code> and <code>value</code> do <strong>NOT</strong> accept spaces. The value will be cut off at the first word. This will be fixed in a future release that addresses the argument parsing.</div>

        
        <h3>Shortcuts</h3>

        <p>Shortcuts for common keys have been added, with more to come by request or need. The current shortcuts are:</p>

        <ul>
            <li><strong>port</strong> for "server-port"</li>
            <li><strong>seed</strong> for "level-seed"</li>
        </ul>


    </main>

</html>
