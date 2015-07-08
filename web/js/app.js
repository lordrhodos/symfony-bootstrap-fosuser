$('.navigation').affix({
    offset: {
      // top: $('header').height()-$('.navigation').height()
      top: $('header').height()
    }
});

$('#slider').affix({
    offset: {
      top: $('header').height()
    }
})
;

/*
$('footer').affix({
    offset: {
      top: $('header').height() + 100
    }
})
;
*/

$('.scroll-top').each(function(){
    $(this).click(function(){
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});

$('#slider').carousel({
  interval: 5000
})

$('#slider .item').first().addClass('active');