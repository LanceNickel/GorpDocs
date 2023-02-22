<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Instance Settings - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Instances

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <subnav>
            <?= subnav('manage-instances'); ?>
        </subnav>

        <div class="spacer40"></div>

        <h1>Instance Settings</h1>

        <p>Instances may be cusomized further by editing the <mono>run.sh</mono> file in each instance's directory.</p>



        <h2>Editing run.sh</h2>

        <p>The <mono>run.sh</mono> file is located in an instance's directory. Instance directories are located in <mono>/minecraft/servers</mono>.</p>

        <p>The upper portion of the file contains cusomizable options. These options, when left uncustomized, will inherit the settings in the <a href="/configuration-file/">Gorp configuration file</a>.</p>



        <h2>Options</h2>

        <table>
            <tr>
                <th>Option</th>
                <th>Description</th>
                <th>Expected Value</th>
                <th>Default Value</th>
                <th>Example Value</th>
            </tr>
            <tr>
                <td>JAR</td>
                <td>JAR file to execute when the instance is started.</td>
                <td>Absolute path to JAR file.</td>
                <td><code>$(cat /minecraft/jars/latest)</code></td>
                <td>/path/to/MCJAR.jar</td>
            </tr>
            <tr>
                <td>RAM</td>
                <td>RAM allocation for the instance.</td>
                <td>Integer followed by <mono>G</mono>
                <td><code>$(cat /minecraft/gorp.conf | grep "^[^#;]" | grep 'RAM=' | cut -d '=' -f 2)</code></td>
                <td>8G</td>
            </tr>
        </table>


    </main>

</html>
