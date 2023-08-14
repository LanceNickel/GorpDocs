<!DOCTYPE html>


<?php
require_once('0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

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

        <pre>gorp action <mono>REQUIRED_ARG</mono> [<mono>OPTIONAL_ARG</mono>] MUTUALLY|EXCLUSIVE|ARGS</pre>
        <p>Items in blue are placeholders for YOUR values, like a server name.</p>



        <h2>Manage Servers <span>see: <a href="/manage-servers/">manage servers</a></span></h2>

        <div class="table-container">
            <table>
                <tr>
                    <th>Command</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><code>gorp start <mono>server</mono> [-y]</code></td>
                    <td>Start a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp stop <mono>server</mono> [fast|now]</code></td>
                    <td>Stop a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp restart <mono>server</mono> [fast|now]</code></td>
                    <td>Restart a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp create-server <mono>server</mono> [<mono>world</mono>]</code></td>
                    <td>Create a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp delete-server <mono>server</mono></code></td>
                    <td>Delete a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp backup-server <mono>server</mono></code></td>
                    <td>Backup a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp restore-server <mono>server</mono></code></td>
                    <td>Restore a server instance from backup.</td>
                </tr>
                <tr>
                    <td><code>gorp prop <mono>server</mono> <mono>key</mono> <mono>value</mono></code></td>
                    <td>Changes the server.properties file for the specified server by key/value pair.</td>
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
                    <td><code>gorp create-world <mono>server</mono> [<mono>world</mono>]</code></td>
                    <td>Create a new world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp delete-world <mono>server</mono> [<mono>world</mono>]</code></td>
                    <td>Delete a world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp rename-world <mono>server</mono> <mono>world</mono> <mono>newname</mono></code></td>
                    <td>Rename a world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp reset-world <mono>server</mono></code></td>
                    <td>Delete and regenerate the active world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp switch-world <mono>server</mono> [<mono>world</mono>]</code></td>
                    <td>Change the active world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp backup-world <mono>server</mono></code></td>
                    <td>Back up the active world in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp restore-world <mono>server</mono></code></td>
                    <td>Restore a world from backup in a server instance.</td>
                </tr>
                <tr>
                    <td><code>gorp archive-world <mono>server</mono> [<mono>world</mono>]</code></td>
                    <td>Archive a world in a server instance for long-term storage.</td>
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
                    <td>Get the latest Paper JAR, automatically updating servers.</td>
                </tr>
                <tr>
                    <td><code>gorp get-jar {-g <mono>gamever</mono> | -u <mono>URL</mono>}</code></td>
                    <td>Downloads a Paper JAR for either the specified game version or from the specified URL.</td>
                </tr>
                <tr>
                    <td><code>gorp config [<mono>server</mono>]</code></td>
                    <td>Open the config in a text editor. If <mono>server</mono> is specified, that server's config will be opened.</td>
                </tr>
                <tr>
                    <td><code>gorp upgrade</code></td>
                    <td>Downloads and installs the latest version of Gorp.</td>
                </tr>
                <tr>
                    <td><code>gorp -s <mono>server</mono></code></td>
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
                    <td><code>gorp help</code></td>
                    <td>Open a command reference in the command line.</td>
                </tr>
                <tr>
                    <td><code>gorp -v</code></td>
                    <td>Show the installed Gorp version.</td>
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
