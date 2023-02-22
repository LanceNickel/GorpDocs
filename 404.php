<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>404 Page Not Found - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Error

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <h1>Page Not Found</h1>
        <p>The page requested was not found. Apologies for the inconvenience.</p>

        <a href="https://github.com/LanceNickel/Gorp/issues" target="_blank">Report This Problem</a>


    </main>

</body>
    
</html>
