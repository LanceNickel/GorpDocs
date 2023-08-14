let rawpathname = window.location.pathname;
let path = rawpathname;

// console.log(path);

/**
 * Topic arrays
 * Each array represents a top-level topic on the site sidebar
 * Topics contain indidivudal pages, identified by their pathname
 * These individual pages are located in the topic array
 */

const welcome = [
    "/",
    "/about",
    "/about/"
];

const gettingStarted = [
    "/getting-started/",
    "/getting-started/install",
    "/getting-started/install/",
    "/getting-started/uninstall",
    "/getting-started/uninstall/",
    "/getting-started/requirements",
    "/getting-started/requirements/",
    "/getting-started/install-java",
    "/getting-started/install-java/"
];

const manageServers = [
    "/manage-servers",
    "/manage-servers/",
    "/manage-servers/start-and-stop",
    "/manage-servers/start-and-stop/",
    "/manage-servers/create-and-delete",
    "/manage-servers/create-and-delete/",
    "/manage-servers/server-settings",
    "/manage-servers/server-settings/",
    "/manage-servers/home-directory",
    "/manage-servers/home-directory/",
    "/manage-servers/backup",
    "/manage-servers/backup/"
];

const manageWorlds = [
    "/manage-worlds",
    "/manage-worlds/",
    "/manage-worlds/create-and-delete",
    "/manage-worlds/create-and-delete/",
    "/manage-worlds/switch-worlds",
    "/manage-worlds/switch-worlds/",
    "/manage-worlds/archive",
    "/manage-worlds/archive/",
    "/manage-worlds/backup",
    "/manage-worlds/backup/"
];

const utilities = [
    "/utilities",
    "/utilities/",
    "/utilities/jar-update",
    "/utilities/jar-update/",
    "/utilities/jar-download",
    "/utilities/jar-download/",
    "/utilities/gorp-upgrade",
    "/utilities/gorp-upgrade/",
    "/utilities/server-status",
    "/utilities/server-status/"
];

const commandReference = [
    "/command-reference",
    "/command-reference/"
];

const configurationFile = [
    "/configuration",
    "/configuration/"
];

const changelog = [
    "/changelog",
    "/changelog/"
]







/**
 * SIDEBAR
 */

// WELCOME
if (welcome.includes(path)) {
    $('aside a.nav-item[topic="welcome"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="welcome"]').addClass('active');
}

// GETTING STARTED
if (gettingStarted.includes(path)) {
    $('aside a.nav-item[topic="getting-started"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="getting-started"]').addClass('active');
}

// MANAGE INSTANCES
if (manageServers.includes(path)) {
    $('aside a.nav-item[topic="manage-servers"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="manage-servers"]').addClass('active');
}

// MANAGE WORLDS
if (manageWorlds.includes(path)) {
    $('aside a.nav-item[topic="manage-worlds"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="manage-worlds"]').addClass('active');
}

// UTILITIES
if (utilities.includes(path)) {
    $('aside a.nav-item[topic="utilities"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="utilities"]').addClass('active');
}

// COMMAND REFERENCE
if (commandReference.includes(path)) {
    $('aside a.nav-item[topic="command-reference"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="command-reference"]').addClass('active');
}

// CONFIGURATION FILE
if (configurationFile.includes(path)) {
    $('aside a.nav-item[topic="configuration"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="configuration"]').addClass('active');
}

// CHANGE LOG
if (changelog.includes(path)) {
    $('aside a.nav-item[topic="changelog"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="changelog"]').addClass('active');
}







/**
 * SUBNAV
 */

$('subnav a[href="' + path + '"]').addClass('active');
$('subnav a[href="' + path + '/"]').addClass('active');







/**
 * MOBILE MENU
 */

$('#open-mobile-menu').click(function() {
    $('body').addClass('modal-open');
    $('#mobile-menu-bg').removeClass('hidden');
    $('#mobile-menu').removeClass('hidden');
});

$('.close-mobile-menu').click(function() {
    $('body').removeClass('modal-open');
    $('#mobile-menu').addClass('hidden');
    $('#mobile-menu-bg').addClass('hidden');
});