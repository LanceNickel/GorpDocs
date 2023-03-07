<!DOCTYPE html>


<?php
require_once('../0/php/functions.php');
?>



<html lang="en">
<head>
    <script src="/0/js/themesetup.js" type="text/javascript"></script>
    <?= head(); ?>

    <title>Get Server Status - Gorp Docs</title>
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

        <h1>Get Server Status</h1>

        <pre>gorp -s <em>server</em></pre>

        <p>Get a server instance's current status and other information in JSON format.</p>



        <h2>JSON Output</h2>

        <p>The status command will output the server status in JSON format. The JSON string contains three arrays: Server status, world information, and configuration information.</p>


        <h3>Array: status</h3>

        <div class="table-container">
            <table>
                <tr>
                    <th>Object Name</th>
                    <th>Description</th>
                </tr>

                <tr>
                    <td>running</td>
                    <td>[boolean] Server running status</td>
                </tr>

                <tr>
                    <td>version</td>
                    <td>[String] Last-started game version</td>
                </tr>

                <tr>
                    <td>jar_file</td>
                    <td>[String] Path to currently set JAR file</td>
                </tr>

                <tr>
                    <td>ram</td>
                    <td>[String] Amount of RAM allocated to server</td>
                </tr>

                <tr>
                    <td>path</td>
                    <td>[String] Path to server instance's directory</td>
                </tr>
            </table>
        </div>


        <h3>Array: world</h3>

        <div class="table-container">
            <table>
                <tr>
                    <th>Object Name</th>
                    <th>Description</th>
                </tr>

                <tr>
                    <td>active</td>
                    <td>[String] Directory name of active world</td>
                </tr>

                <tr>
                    <td>total_size</td>
                    <td>[String] Total size of all world files</td>
                </tr>

                <tr>
                    <td>o_size</td>
                    <td>[String] Total size of the Overworld dimension's world files</td>
                </tr>

                <tr>
                    <td>n_size</td>
                    <td>[String] Total size of the Nether dimension's world files</td>
                </tr>

                <tr>
                    <td>e_size</td>
                    <td>[String] Total size of the End dimension's world files</td>
                </tr>
            </table>
        </div>


        <h3>Array: properties</h3>

        <div class="table-container">
            <table>
                <tr>
                    <th>Object Name</th>
                    <th>Description</th>
                </tr>

                <tr>
                    <td>whitelist</td>
                    <td>[boolean] Whitelist enabled status</td>
                </tr>

                <tr>
                    <td>gamemode</td>
                    <td>[String] The set gamemode</td>
                </tr>

                <tr>
                    <td>difficulty</td>
                    <td>[String] The set difficulty</td>
                </tr>

                <tr>
                    <td>hardcore</td>
                    <td>[boolean] Hardcore enabled status</td>
                </tr>

                <tr>
                    <td>server_port</td>
                    <td>[int] Network port the server listens on</td>
                </tr>
            </table>
        </div>



        <h2>Sample JSON Output</h2>

        <div class="pre-container">
            <pre>user@hostname ~$ <strong>gorp -s public</strong></pre>
        </div>

        <div class="pre-container">
            <pre>{
  "status": [
    {
      "running": true,
      "version": "1.19.3",
      "jar_file": "/home/test/gorpmc/jars/paper-1.19.3-445.jar",
      "ram": "4G",
      "path": "/home/test/gorpmc/servers/public"
    }
  ],
  "world": [
    {
      "active": "world-ottawa",
      "total_size": "30M",
      "o_size": "13M",
      "n_size": "9.2M",
      "e_size": "8.1M"
    }
  ],
  "properties": [
    {
      "whitelist": false,
      "gamemode": "false",
      "difficulty": "easy",
      "hardcore": false,
      "server_port": 25565
    }
  ]
}</pre>
        </div>


    </main>

</html>
