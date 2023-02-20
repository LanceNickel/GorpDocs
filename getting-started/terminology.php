<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/0/styles/style.css" rel="stylesheet">

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Terminology - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Getting Started
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



        <h1>Terminology</h1>

        <p>Some key terms used throughout this documentation.</p>

        <table>
            <tr>
                <th>Term</th>
                <th>Definition</th>
            </tr>
            <tr>
                <td>world</td>
                <td>The actual Minecraft world where play happens. A world is split into three folders, one for each dimension. Worlds have names and are stored inside of server instances.</td>
            </tr>
            <tr>
                <td>server instance (<em>instance</em>)</td>
                <td>An individual Minecraft Server. Each instance contains its own properties, plugins, worlds, and more). Each server instance has a name.</td>
            </tr>
            <tr>
                <td>Paper</td>
                <td>Paper is a Minecraft Server software similar to Spigot and Bukkit. It has many great performance improvements, supports the same plugins, and is more supported. Gorp works exclusively with Paper.</td>
            </tr>
            <tr>
                <td>server JAR</td>
                <td>A server JAR is a Java program file that, when run, starts the Minecraft Server.</td>
            </tr>
        </table>



        <h2>Commands</h2>

        <p>Gorp commands in this documentation will follow this format:<br>
        <code>gorp <em>action</em> <em>arguments</em></code></p>

        <p>Where <code>action</code> is the task you want to perform (such as start, stop, backup, etc.), and <code>arguments</code> are argument(s) that can be passed.</p>

        <p>Arguments in square brackets <mono>[]</mono> are optional.</p>

        <p>Terms in <em>italics</em> are placeholders and should be replaced with your value. An example would be a server name: <code>gorp start <em>public</em></code></p>



        <h2>Read Next</h2>

        <a class="no-underline" href="/getting-started/install">
            <div class="option-button">
                <span class="subsection">Install</span>
                <span class="description">Get Gorp on your system.</span>
            </div>
        </a>


    </main>

</body>
    
</html>
