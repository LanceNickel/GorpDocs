// var modalOpen = false;



$('#open-modal-1').click(function() {
    // modalOpen = true;

    $('body').addClass('modal-open');
    $('#modal-1').removeClass('hidden');
});

$('#open-modal-2').click(function() {
    // modalOpen = true;

    $('body').addClass('modal-open');
    $('#modal-2').removeClass('hidden');
});

$('#open-modal-3').click(function() {
    // modalOpen = true;

    $('body').addClass('modal-open');
    $('#modal-3').removeClass('hidden');
});

$('#open-modal-4').click(function() {
    // modalOpen = true;

    $('body').addClass('modal-open');
    $('#modal-4').removeClass('hidden');
});

$('#open-modal-5').click(function() {
    // modalOpen = true;

    $('body').addClass('modal-open');
    $('#modal-5').removeClass('hidden');
});



$('.close-modal-button').click(function() {
    // modalOpen = false;

    $('body').removeClass('modal-open');
    $('#modal-1').addClass('hidden');
    $('#modal-2').addClass('hidden');
    $('#modal-3').addClass('hidden');
    $('#modal-4').addClass('hidden');
    $('#modal-5').addClass('hidden');
});

$('.modal-bg').click(function() {
    // modalOpen = false;

    $('body').removeClass('modal-open');
    $('#modal-1').addClass('hidden');
    $('#modal-2').addClass('hidden');
    $('#modal-3').addClass('hidden');
    $('#modal-4').addClass('hidden');
    $('#modal-5').addClass('hidden');
});