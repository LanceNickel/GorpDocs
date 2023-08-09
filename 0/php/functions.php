<?php
// php is ugly, gross, and disgusting.



/**
 * Revision version. Set to current date when publishing to Redifer to clear device caches.
 */
function rev() {
    return '2023-08-09.2';
}

function ver() {
    return '0.6.1';
}







/**
 * Print HTML <head> for pages.
 */

function head() {
    $rev = rev();
    $stylesheet = stylesheet();

    echo <<<EOF
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="/0/manifest.json">
    
        $stylesheet

        <script src="/0/js/jquery-3.6.3.min.js" type="text/javascript" defer></script>
        <script src="/0/js/cookies.js?rev=$rev" type="text/javascript" defer></script>
        <script src="/0/js/theme.js?rev=$rev" type="text/javascript" defer></script>
        <script src="/0/js/navigation.js?rev=$rev" type="text/javascript" defer></script>
        <script src="/0/js/features.js?rev=$rev" type="text/javascript" defer></script>

        <script>
            // Firefox fix
            let HI_MOM;
        </script>

    EOF;
}







/**
 * Set stylesheet based on "theme" cookie status.
 */
function stylesheet() {
    $cookie = $_COOKIE['theme'];

    if ($cookie == "light") {
        return '<link href="/0/styles/light.css" rel="stylesheet">';
    }
    else {
        return '<link href="/0/styles/dark.css" rel="stylesheet">';
    }
}







/**
 * Prints sidebar HTML for site pages
 * 
 * @param type (optional) Sidebar type to render (default is 'normal') 
 */

function sidebar($type='normal') {
    $rev = rev();
    $ver = ver();

    if ($type == 'normal') {
        echo <<<EOF
        <span class="title">Gorp Docs</span>

                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-servers" href="/manage-servers/">Manage Servers</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>
                <a class="nav-item" topic="changelog" href="/changelog/">Change Log</a>

                <span id="sidebar-version">For Gorp $ver<br>$rev</span>

        EOF;
    }

    else if ($type == 'nover') {
        echo <<<EOF
        <span class="title">Gorp Docs</span>

                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-servers" href="/manage-servers/">Manage Servers</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>
                <a class="nav-item" topic="changelog" href="/changelog/">Change Log</a>

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
 * Prints subnav HTML for site pages
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
        <a href="/getting-started/install/">Install</a>
                    <a href="/getting-started/uninstall/">Uninstall</a>
                    <a href="/getting-started/requirements/">Requirements</a>
                    <a href="/getting-started/install-java/">Install Java</a>

        EOF;
    }

    else if ($topic == 'manage-servers') {
        echo <<<EOF
        <a href="/manage-servers/create-and-delete/">Create & Delete</a>
                    <a href="/manage-servers/start-and-stop/">Start & Stop</a>
                    <a href="/manage-servers/server-settings/">Server Settings</a>
                    <a href="/manage-servers/backup/">Backup</a>
                    <a href="/manage-servers/home-directory/">Home Directory</a>

        EOF;
    }

    else if ($topic == 'manage-worlds') {
        echo <<<EOF
        <a href="/manage-worlds/create-and-delete/">Create, Delete, Rename, & Reset</a>
                <a href="/manage-worlds/switch-worlds/">Switch Worlds</a>
                <a href="/manage-worlds/backup/">Backup</a>
                <a href="/manage-worlds/archive/">Archive</a>

        EOF;
    }

    else if ($topic == 'utilities') {
        echo <<<EOF
        <a href="/utilities/jar-update/">JAR Updater</a>
                    <a href="/utilities/jar-download/">JAR Downloader</a>
                    <a href="/utilities/gorp-upgrade/">Gorp Upgrader</a>
                    <a href="/utilities/server-status/">Server Status</a>

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







/**
 * Prints mobile menu items for all pages.
 */
function mobileMenu() {
    $rev = rev();
    $ver = ver();

    echo <<<EOF
    <a id="open-mobile-menu">
            <div class="mobile-menu-image">
                <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><path d="m29 8h-26c-1.1045 0-2-.8955-2-2s.8955-2 2-2h26c1.1045 0 2 .8955 2 2s-.8955 2-2 2z"/><path d="m29 28h-26c-1.1045 0-2-.8955-2-2s.8955-2 2-2h26c1.1045 0 2 .8955 2 2s-.8955 2-2 2z"/><path d="m29 18h-26c-1.1045 0-2-.8955-2-2s.8955-2 2-2h26c1.1045 0 2 .8955 2 2s-.8955 2-2 2z"/></g></svg>
            </div>
        </a>

        <div id="mobile-menu-bg" class="hidden"></div>
        <div id="mobile-menu" class="hidden">
            <div class="inner">
                <a class="close-mobile-menu"><svg id="Capa_1" enable-background="new 0 0 320.591 320.591" height="512" viewBox="0 0 320.591 320.591" width="512" xmlns="http://www.w3.org/2000/svg"><g><g id="close_1_"><path d="m30.391 318.583c-7.86.457-15.59-2.156-21.56-7.288-11.774-11.844-11.774-30.973 0-42.817l257.812-257.813c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875l-259.331 259.331c-5.893 5.058-13.499 7.666-21.256 7.288z"/><path d="m287.9 318.583c-7.966-.034-15.601-3.196-21.257-8.806l-257.813-257.814c-10.908-12.738-9.425-31.908 3.313-42.817 11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414-6.35 5.522-14.707 8.161-23.078 7.288z"/></g></g></svg></a>
                
                <a class="nav-item" topic="welcome" href="/">Welcome Page</a>
                <a class="nav-item" topic="getting-started" href="/getting-started/">Getting Started</a>
                <a class="nav-item" topic="manage-servers" href="/manage-servers/">Manage Servers</a>
                <a class="nav-item" topic="manage-worlds" href="/manage-worlds/">Manage Worlds</a>
                <a class="nav-item" topic="utilities" href="/utilities/">Utilities</a>
                <a class="nav-item" topic="command-reference" href="/command-reference/">Command Reference</a>
                <a class="nav-item" topic="configuration-file" href="/configuration-file/">Configuration File</a>
                <a class="nav-item" topic="changelog" href="/changelog/">Change Log</a>

                <span id="mobile-version">For Gorp $ver<br>$rev</span>
            </div>
        </div>
    EOF;
}