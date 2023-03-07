<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <script src="/0/js/modal.js" type="text/javascript" defer></script>
    <title>Command Reference - Gorp Docs</title>
</head>



<body>

    <header>
        <?= mobileMenu(); ?>

        Command Reference

        <a id="change-theme" class="button theme"></a>
    </header>
    


    <aside>
        <?= sidebar(); ?>
    </aside>



    <div id="background"></div>
    <main class="article">

        <h1>Command Reference</h1>

        <p>These are all the possible commands in Gorp.</p>

        <p>Elements in <code><em>italics</em></code> are placeholder values where your values should go (like world names). Elements in <code>[brackets]</code> are optional. Elements separated <code>by|pipes</code> are mutually exlusive arguments.</p>

        <p>Gorp accepts optional global flags, inserted right after "gorp". Ex: <code>gorp -q start server</code>.</p>

        <h3>Valid global flags</h3>

        <ul>
            <li><mono>-q</mono> Quiet. Do not show status messages.</li>
            <li><mono>-Q</mono> Silent. Suppress all output except for strictly necessary.</li>
        </ul>



        <h2>Manage Servers <span>see: <a href="/manage-servers/">manage servers</a></span></h2>

        <div class="table-container">
            <table>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><code>gorp start <em>server</em> [-y]</code></td>
                    <td>Starts a servers.</td>
                </tr>
                <tr>
                    <td><code>gorp stop <em>server</em> [-f|-n]</code></td>
                    <td>Stops a server.</td>
                </tr>
                <tr>
                    <td><code>gorp restart <em>server</em> [-f|-n]</code></td>
                    <td>Restarts a server.</td>
                </tr>
                <tr>
                    <td><code>gorp create-server <em>server</em></code></td>
                    <td>Creates a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp delete-server <em>server</em></code></td>
                    <td>Deletes a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp backup-server <em>server</em></code></td>
                    <td>Backup a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp restore-server <em>server</em></code></td>
                    <td>Restore a server instance's files from a backup.</td>
                </tr>
            </table>
        </div>



        <h2>Manage Worlds <span>see: <a href="/manage-worlds/">manage worlds</a></span></h2>

        <div class="table-container">
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
                    <td><code>gorp reset-world <em>server</em></code></td>
                    <td>Deletes and regenerates the active world in a server instance.</td>
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
        </div>



        <h2>Utilities <span>see: <a href="/utilities/">utilities</a></span></h2>

        <div class="table-container">
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
                    <td><code>gorp get-jar -g <em>gamever</em> | -u <em>URL</em></code></td>
                    <td>Downloads a Paper JAR for either the specified game version or from the specified URL. <a href="/utilities/jar-download/">Learn more</a>.</td>
                </tr>
                <tr>
                    <td><code>gorp upgrade</code></td>
                    <td>Downloads and installs the latest version of Gorp.</td>
                </tr>
                <tr>
                    <td><code>gorp -s <em>server</em></code></td>
                    <td>Get the status of a server instance in JSON format.</td>
                </tr>
            </table>
        </div>



        <h2>Miscellaneous</h2>

        <div class="table-container">
            <table>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><code>gorp -h</code></td>
                    <td>Open a command reference in the command line.</td>
                </tr>
                <tr>
                    <td><code>gorp -v</code></td>
                    <td>Show the installed Gorp version.</td>
                </tr>
                <tr>
                    <td><code>gorp ls</code></td>
                    <td>List servers in <mono>~/gorpmc/servers</mono>.</td>
                </tr>
            </table>
        </div>
            
            

    </main>



    <div id="modal-1" class="hidden">
        <div class="modal-bg">
            <div class="modal-window">
                <a class="close-modal-button">
                    <img src="/0/img/close.svg" />
                </a>
                <div class="title">Valid GAMEVER Values</div>
                <div class="content bulleted">
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
            </div>
        </div>
    </div>

    

</body>

</html>
