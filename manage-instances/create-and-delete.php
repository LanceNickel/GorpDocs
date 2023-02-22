<!DOCTYPE html>


<?php
require_once('../0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= stylesheet(); ?>

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Create & Delete Server Instances - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Manage Instances
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

        <h1>Create & Delete Server Instances</h1>

        <p>Using multiple server instances allows for different worlds and game versions to be played with ease. Use cases for multiple instances would be hosting a public server, whilst also hosting a smaller "friends only" private server.</p>

        
        
        <h2>Create an Instance</h2>

        <pre>gorp create-server <em>server</em></pre>

        <p>This will create an instance directory in <mono>/minecraft/servers</mono> and perform the first-time world generation.</p>



        <h2>Delete an Instance</h2>

        <pre>gorp delete-server <em>server</em></pre>

        <p>This will delete an instance's files. <strong class="important">This action is irreverisble. Ensure you have a backup!</strong></p>


    </main>

</html>
