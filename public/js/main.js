// Отправка форм
function send(form_id,result_div)
{
    console.log( jQuery('#'+form_id).serialize() );

    var goal = jQuery('#'+form_id + ' [name=form_name]').val();
    var params = jQuery('#'+form_id).serialize()

    jQuery('#'+form_id).find('input').attr('disabled', 'disabled')
    jQuery('#'+form_id).fadeTo(500, 0.5)

    // Отсылаем паметры
    jQuery.ajax({
        type: "POST",
        url:  jQuery('#'+form_id).attr('action'),
        data: params,
        // Выводим то что вернул PHP
        success: function(html)
        {
            jQuery('#'+form_id).delay( 900 ).hide();
            jQuery("#"+result_div).delay( 900 ).show();
            try { ga('send', 'event', goal, 'click'); } catch (e) {console.error(e)}
            try { yaCounter66211795.reachGoal(goal); } catch (e) {console.error(e)}
            try { fbq('track', 'CompleteRegistration'); } catch (e) {console.error(e)}
        },
        error: function(){
            alert('При отправке произошла ошибка, пожалуйста, свяжитесь с нами по телефону');
            jQuery('#'+form_id).fadeTo(500, 1)
            jQuery('#'+form_id).find('input').removeAttr('disabled')
        }
    });
}

$('form').on('submit', function (e) {
    e.preventDefault()
    e.stopPropagation()
    var form = $(this).attr('id');
    var resultDiv = form + '-result-ok';

    send(form, resultDiv);

    return false;
})

$('.calculator__formBottom').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestCalculator')
});

$('.plastic__blocktextBtn').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestWindow')
});

$('.doors__blocktextBtn').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestDoor')
});

$('.balkon__blocktextBtn').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestBalcon')
});

$('.exclusive__itemBtn').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestModels')
});

$('.download__btn').on('click', function () {
    $('#middle-form [name=form_name]').val('setRequestPrice')
});

$(".show-modal").on('click', function (e) {
    e.preventDefault()
    $(".overl2").fadeIn();
})

$(".close-popup2").on('click', function (e) {
    e.preventDefault()
    $(".overl2").fadeOut();
})
