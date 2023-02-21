<?php

/**
 * Echoes sidebar HTML for site pages
 * 
 * @param type (optional) Sidebar type to render (default is 'normal') 
 */
function sidebar($type='normal') {
    if ($type == 'normal') {
        echo <<<EOF
        <span class="title">Gorp Docs</span>

                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-instances" href="/manage-instances/">Manage Instances</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>

                <span id="sidebar-version">Gorp v1.0.3</span>

        EOF;
    }

    else if ($type == 'nover') {
        echo <<<EOF
        <span class="title">Gorp Docs</span>

                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-instances" href="/manage-instances/">Manage Instances</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>

        EOF;
    }

    else if ($type == 'elements') {
        echo <<<EOF
        <span class="title">Sidebar Title</span>

                <a class="nav-item" topic="welcome">Nav Item</a>
                <a class="nav-item" topic="welcome">Nav Item</a>
                <a class="nav-item active" topic="welcome">Active Nav Item</a>
                <a class="nav-item" topic="welcome">Nav Item With Text That's Wrapped</a>

                <span id="sidebar-version">Gorp v420.69</span>

        EOF;
    }

    else {
        echo "invalid sidebar type";
    }
}



/**
 * Echoes subnav HTML for site pages
 * 
 * @param topic Topic for which the subnav should be rendered
 */
function subnav($topic='notpassed') {
    if ($topic == 'welcome') {
        echo <<<EOF
        <a href="/">Home</a>
                    <a href="/about/">About Gorp</a>

        EOF;
    }

    else if ($topic == 'getting-started') {
        echo <<<EOF
        <a href="/getting-started/terminology/">Terminology</a>
                    <a href="/getting-started/install/">Install</a>
                    <a href="/getting-started/uninstall/">Uninstall</a>

        EOF;
    }

    else if ($topic == 'manage-instances') {
        echo <<<EOF
        <a href="/manage-instances/create-and-delete/">Create & Delete</a>
                    <a href="/manage-instances/start-and-stop/">Start & Stop</a>
                    <a href="/manage-instances/instance-settings/">Instance Settings</a>

        EOF;
    }

    else if ($topic == 'manage-worlds') {
        echo <<<EOF
        <a href="/manage-worlds/create-and-delete/">Create & Delete</a>
                <a href="/manage-worlds/switch-worlds/">Switch Worlds</a>
                <a href="/manage-worlds/backup/">Backup a World</a>
                <a href="/manage-worlds/archive/">Archive a World</a>

        EOF;
    }

    else if ($topic == 'utilities') {
        echo <<<EOF
        <a href="/utilities/jar-update/">JAR Updater</a>
                    <a href="/utilities/jar-download/">JAR Downloader</a>
                    <a href="/utilities/gorp-upgrade/">Gorp Upgrader</a>

        EOF;
    }

    else if ($topic == 'elements') {
        echo <<<EOF
        <a>Nav Item</a>
                    <a class="active">Active Nav Item</a>
                    <a>Nav Item</a>

        EOF;
    }

    else if ($topic == 'notpassed') {
        echo "a subnav type is required!";
    }

    else {
        echo "invalid subnav parent category selection.";
    }
}



function mobileMenu() {
    echo <<<EOF
    <a id="open-mobile-menu">
            <div class="mobile-menu-image">
                <img src="/0/img/hamburger.svg" />
            </div>
        </a>

        <div id="mobile-menu" class="hidden">
            <div class="inner">
                <a class="close-mobile-menu"><img src="/0/img/close.svg" /></a>
                
                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-instances" href="/manage-instances/">Manage Instances</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>
            </div>
        </div>
    EOF;
}