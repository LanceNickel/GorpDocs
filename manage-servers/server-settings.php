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



        <h2>Launch & Resource Allocation <span class="tag box blue inline">RECENTLY CHANGED</span></h2>

        <p>Override a server instance's JAR file and RAM allocation, breaking from the global settings set in <a target="_blank" href="/configuration-file.php">Gorp's configuration file</a>.</p>

        <pre>gorp config <em>server</em></pre>

        <div class="table-container">
            <table>
                <tr>
                    <th>Option</th>
                    <th>Expected Value</th>
                    <th>Default Value</th>
                    <th>Example Value</th>
                </tr>
                <tr>
                    <td>CUSTOM_JAR</td>
                    <td>Absolute path to a JAR file. For JARs downloaded with <code>get-jar</code> use:<br><mono>$HOMEDIR/jars/[version].jar</td>
                    <td><em>Value from gorp.conf</em></td>
                    <td>$HOMEDIR/jars/1.20.1.jar</td>
                </tr>
                <tr>
                    <td>CUSTOM_RAM</td>
                    <td>The amount of RAM to allocate to the server, in gigabytes.</td>
                    <td><em>Value from gorp.conf</em></td>
                    <td>8G</td>
                </tr>
            </table>
        </div>



        <h2>Changing server.properties</h2>

        <div class="pre-container">
            <pre>gorp prop <em>server</em> <em>key</em> <em>value</em></pre>
        </div>

        <p>Where <code>key</code> is the property name (like <mono>difficulty</mono>) and <code>value</code> is the new value (like <mono>hard</mono>).</p>

        <div class="box blue subtle">To enter values with spaces, please wrap them in quotes. Example: <code>gorp prop server motd "My Wonderful Server!"</code></div>

        
        <h3>Shortcuts</h3>

        <p>Shortcuts for common keys have been added, with more to come by request or need. The current shortcuts are:</p>

        <ul>
            <li><strong>port</strong> for "server-port"</li>
            <li><strong>seed</strong> for "level-seed"</li>
        </ul>


    </main>

</html>
