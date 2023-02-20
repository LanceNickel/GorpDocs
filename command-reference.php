<!DOCTYPE html>


<?php
require_once('0/php/navigation.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/0/styles/style.css" rel="stylesheet">

    <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
    <script src="/0/js/navigation.js" type="text/javascript" defer></script>

    <title>Command Reference - Gorp Docs</title>

    <script>
        // Firefox fix
        let HI_MOM;
    </script>
</head>
<body>

    <header>
        <?= mobileMenu(); ?>

        Command Reference
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <h1>Command Reference</h1>

        <p>These are all the possible commands in Gorp.</p>

        <p>Elements in <code><em>italics</em></code> are placeholder values where your values should go (like world names). Elements in <code>[brackets]</code> are optional. Elements separated <code>by|pipes</code> are mutually exlusive arguments.</p>



        <h2>Manage Instances <span>see: <a href="/manage-instances/">manage instances</a></span></h2>

        <table>
            <tr>
                <th>Command</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>gorp start <em>server</em></code></td>
                <td>Starts an instance.</td>
            </tr>
            <tr>
                <td><code>gorp stop <em>server</em> [fast|now]</code></td>
                <td>Stops an instance.</td>
            </tr>
            <tr>
                <td><code>gorp restart <em>server</em> [fast|now]</code></td>
                <td>Restarts an instance.</td>
            </tr>
            <tr>
                <td><code>gorp create-server <em>server</em></code></td>
                <td>Creates a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp delete-server <em>server</em></code></td>
                <td>Deletes a server instance.</td>
            </tr>
        </table>



        <h2>Manage Worlds <span>see: <a href="/manage-worlds/">manage worlds</a></span></h2>

        <table>
            <tr>
                <th>Command</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>gorp create-world <em>server</em> [<em>world</em>]</code></td>
                <td>Creates a world named <em><mono>world</mono></em> in a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp delete-world <em>server</em> [<em>world</em>]</code></td>
                <td>Deletes a world named <em><mono>world</mono></em> in a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp switch-world <em>server</em> [<em>world</em>]</code></td>
                <td>Switches to a world named <em><mono>world</mono></em> in a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp backup-world <em>server</em></code></td>
                <td>Backs up the active world in a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp restore-world <em>server</em></code></td>
                <td>Restores a world from a backup in a server instance.</td>
            </tr>
            <tr>
                <td><code>gorp archive-world <em>server</em> [<em>world</em>]</code></td>
                <td>Archives the world named <em><mono>world</mono></em> in a server instance.</td>
            </tr>
        </table>



        <h2>Utilities <span>see: <a href="/utilities/">utilities</a></span></h2>

        <table>
            <tr>
                <th>Command</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>gorp update-jar</code></td>
                <td>Downloads and sets the latest stable Paper JAR file globally.</td>
            </tr>
            <tr>
                <td><code>gorp download-jar <em>version</em></code></td>
                <td>Downloads a Paper JAR file for the specified Minecraft version. <a id="open-gamever-modal">SUPPORTED GAME VERSIONS</a></td>
            </tr>
            <tr>
                <td><code>gorp upgrades</code></td>
                <td>Downloads and installs the latest version of Gorp.</td>
            </tr>
        </table>
            


    </main>



    <div id="gamever-modal" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <div class="title">Valid GAMEVER Values</div>
                <div class="content">
                    <ul>
                        <li>1.8.8</li>
                        <li>1.9.4</li>
                        <li>1.10.2</li>
                        <li>1.11.2</li>
                        <li>1.12</li>
                        <li>1.12.1</li>
                        <li>1.12.2</li>
                        <li>1.13-pre7</li>
                        <li>1.13</li>
                        <li>1.13.1</li>
                        <li>1.13.2</li>
                        <li>1.14</li>
                        <li>1.14.1</li>
                        <li>1.14.2</li>
                        <li>1.14.3</li>
                        <li>1.14.4</li>
                        <li>1.15</li>
                        <li>1.15.1</li>
                        <li>1.15.2</li>
                        <li>1.16.1</li>
                        <li>1.16.2</li>
                        <li>1.16.3</li>
                        <li>1.16.4</li>
                        <li>1.16.5</li>
                        <li>1.17</li>
                        <li>1.17.1</li>
                        <li>1.18</li>
                        <li>1.18.1</li>
                        <li>1.18.2</li>
                        <li>1.19</li>
                        <li>1.19.1</li>
                        <li>1.19.2</li>
                        <li>1.19.3</li>
                    </ul>
                </div>
                <div class="actions">
                    <button class="button close-modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
