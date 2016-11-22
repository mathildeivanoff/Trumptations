$('.banner').unslider({ animation: 'fade', autoplay: true, delay: 10000 });

$(document).ready(function (){
     $(".fb-xfbml-parse-ignore").attr('onclick', "window.open('https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(window.location.href)+"&amp;src=sdkpreparse', 'newwindow', 'width=600, height=500'); return false;")
     
     $('.banner').height($(".quotes").height());
})

$('.banner').on('unslider.change', function(event, index, slide) {
    
    $('.banner').height($(".quotes").height());
    
    var link = slide.children().attr('href');
    
    $(".fb-share-button").attr('data-href', link)
    
    $(".fb-xfbml-parse-ignore").attr('onclick', "window.open('https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(link)+"&amp;src=sdkpreparse', 'newwindow', 'width=600, height=500'); return false;")
    
    $(".twitter-share-button").attr('onclick', "window.open('https://twitter.com/intent/tweet?text="+encodeURI(link)+"', 'newwindow', 'width=600, height=500'); return false;")
});

$("#random").click(function() {
    var i = 0;
    var li = 
    $('ol').children().each(function() {
        i = i + 1;
    })
    
    var quote = $("ol").children();
    $( quote ).eq(Math.floor(Math.random() * i)).trigger( "click" );
    
})