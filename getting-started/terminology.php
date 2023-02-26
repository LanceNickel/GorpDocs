<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Terminology - Gorp Docs</title>
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



        <h1>Terminology</h1>

        <p>Some key terms used throughout this documentation.</p>

        <div class="table-container">
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
        </div>



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
