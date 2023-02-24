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
    "/getting-started/terminology",
    "/getting-started/terminology/",
    "/getting-started/install",
    "/getting-started/install/",
    "/getting-started/uninstall",
    "/getting-started/uninstall/",
];

const manageInstances = [
    "/manage-instances",
    "/manage-instances/",
    "/manage-instances/start-and-stop",
    "/manage-instances/start-and-stop/",
    "/manage-instances/create-and-delete",
    "/manage-instances/create-and-delete/",
    "/manage-instances/instance-settings",
    "/manage-instances/instance-settings/"
];

const manageWorlds = [
    "/manage-worlds",
    "/manage-worlds/",
    "/manage-worlds/create-and-delete",
    "/manage-worlds/create-and-delete/",
    "/manage-worlds/switch-worlds",
    "/manage-worlds/switch-worlds/",
    "/manage-worlds/archive",
    "/manage-worlds/archive/"
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
];

const commandReference = [
    "/command-reference",
    "/command-reference/"
];

const configurationFile = [
    "/configuration-file",
    "/configuration-file/"
];



/**
 * SIDEBAR logic
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
if (manageInstances.includes(path)) {
    $('aside a.nav-item[topic="manage-instances"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="manage-instances"]').addClass('active');
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
    $('aside a.nav-item[topic="configuration-file"]').addClass('active');
    $('#mobile-menu a.nav-item[topic="configuration-file"]').addClass('active');
}



/**
 * SUBNAV logic
 */

$('subnav a[href="' + path + '"]').addClass('active');
$('subnav a[href="' + path + '/"]').addClass('active');



/**
 * MODAL logic
 */

$('#open-modal-1').click(function() {
    $('body').addClass('modal-open');
    $('#modal-1').removeClass('hidden');
});

$('#open-modal-2').click(function() {
    $('body').addClass('modal-open');
    $('#modal-2').removeClass('hidden');
});

$('#open-modal-3').click(function() {
    $('body').addClass('modal-open');
    $('#modal-3').removeClass('hidden');
});

$('#open-modal-4').click(function() {
    $('body').addClass('modal-open');
    $('#modal-4').removeClass('hidden');
});

$('#open-modal-5').click(function() {
    $('body').addClass('modal-open');
    $('#modal-5').removeClass('hidden');
});

$('.modal-bg').click(function() {
    $('body').removeClass('modal-open');
    $('#modal-1').addClass('hidden');
    $('#modal-2').addClass('hidden');
    $('#modal-3').addClass('hidden');
    $('#modal-4').addClass('hidden');
    $('#modal-5').addClass('hidden');
});

$('.close-modal').click(function() {
    $('body').removeClass('modal-open');
    $('#modal-1').addClass('hidden');
    $('#modal-2').addClass('hidden');
    $('#modal-3').addClass('hidden');
    $('#modal-4').addClass('hidden');
    $('#modal-5').addClass('hidden');
});



/**
 * MOBILE MENU logic
 */

$('#open-mobile-menu').click(function() {
    $('body').addClass('modal-open');
    $('#mobile-menu').removeClass('hidden');
});

$('.close-mobile-menu').click(function() {
    $('body').removeClass('modal-open');
    $('#mobile-menu').addClass('hidden');
});