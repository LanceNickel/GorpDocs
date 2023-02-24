<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>General Utilities - Gorp Docs</title>
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

        <h1>General Utilities</h1>

        <p>Simple, "one-liner" utilities that perform a very simple function. Generally, these are used for getting quick access to a server, getting information, or otherwise simplyfing a routine task.</p>

        
        
        <h2>Miscellaneous Utilities</h2>

        <table>
            <tr>
                <th>Command</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>gorp help</code></td>
                <td>Open a command reference in the command line.</td>
            </tr>
            <tr>
                <td><code>gorp -v</code></td>
                <td>Show the installed Gorp version.</p>
            </tr>
            <tr>
                <td><code>gorp list-servers</code></td>
                <td>List servers in <mono>/minecraft/servers</mono>.</td>
            </tr>
        </table>



    </main>

</html>
