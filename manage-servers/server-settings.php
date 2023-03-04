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



        <h2>Editing run.sh</h2>

        <p>The <mono>run.sh</mono> file is located in a server's directory. Server instance directories are located in <mono>~/gorpmc/servers/</mono>.</p>

        <p>The upper portion of the file contains customizable options. These options, when left uncustomized, will inherit the settings in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Options</h2>

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


    </main>

</html>
