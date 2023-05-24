<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Changelog - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Change Log

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article changelog">

        <h1>Change Log</h1>

        
        
        <h2>0.5.0</h2>
        
        <p><strong>Major improvement for Gorp's safety features.</strong></p>

        <ul>
            <li><code>NEW</code> <mono>MAX_RAM</mono> option in config file. Gorp will not start a server if RAM would be over-allocated.</li>
            <li><code>NEW</code> Better exiting and error handling</li>
            <li><code>CHG</code> <code>gorp -v</code> now reports more helpful information</li>
            <li><code>FIX</code> General improvements</li>
        </ul>


        <h3>0.5.1</h3>
        <ul>
            <li><code>NEW</code> Use <code>gorp rename-world</code> to rename a world</li>
            <li><code>CHG</code> <mono>GAMEVER</mono> in config file now has default value of <mono>latest</mono></li>
            <li><code>CHG</code> Made error messages more readable</li>
        </ul>


        <h3>0.5.2</h3>
        <ul>
            <li><code>FIX</code>Error messages when upgrading Gorp</li>
            <li><code>FIX</code>Improve installation process</li>
        </ul>



        <h2>0.4.0</h2>
        
        <p><strong>First release of Early Beta phase!</strong>

        <ul>
            <li><code>NEW</code> Use <code>gorp upgrade</code> to upgrade Gorp's installation</li>
            <li><code>CHG</code> Re-factored</li>
        </ul>


        <h3>0.4.1</h3>
        <ul>
            <li><code>FIX</code> General refactor-related bug fixes</li>
        </ul>


        <h3>0.4.2</h3>
        <ul>
            <li><code>FIX</code> Upgrade failures</li>
        </ul>

        
        


    </main>
    
</body>
</html>

    

</body>

</html>
