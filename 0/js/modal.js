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