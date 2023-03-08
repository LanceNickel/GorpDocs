/**
 * Send string to clipboard
 */

function sendToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text);
        return true;
    }
    else {
        console.log('navigation.js: Browser not compatible with navigator.clipboard -- Please upgrade your browser.');
        return false;
    }
}







/**
 * Copy-able code blocks
 */

$('.copy').attr('title', 'Click to copy');

$('.copy').click(function() {
    let id = $(this).attr('id');
    let contents = $(`#${id}`).html();
    let command = contents.replace(/&amp;/g, '&');

    console.log(command);

    if(sendToClipboard(command)) {
        $(`#${id}`).addClass('copied');
    }
});







/**
 * Modals
 */

$('.open-modal').click(function() {
    let id = $(this).attr('name');
    
    console.log('clicked! open id: ' + id);

    $('body').addClass('modal-open');
    $(`#${id}`).removeClass('hidden');
});

$('.close-modal').click(function() {
    $('body').removeClass('modal-open');
    $('.modal').addClass('hidden');
});

$('.modal-bg').click(function() {
    $('body').removeClass('modal-open');
    $('.modal').addClass('hidden');
});