var burger = $('.navbar-toggler');
burger.on('click', function addShow(){
	if ( burger.hasClass('addShow') ) {
		$(this).removeClass('addShow');
	}else{
		$(this).addClass('addShow');
	}
});
$('.title-footer').on('click', function(){
	$('.footer-list').toggleClass('list-open');
});
var p = $('.popup__overlay');
$('.popup__toggle').click(function() {
    p.addClass('popup_open')
})
p.click(function(event) {
    e = event || window.event
    if (e.target == this) {
        $(p).removeClass('popup_open');
    }
})
$('.popup__close').click(function() {
    p.removeClass('popup_open')
})
$(function() {
    $('.popup__toggle').bind('click', function(e) {
        e.preventDefault();
    });
});
$('input[type="tel"]').mask('+38 (000) 000-00-00');