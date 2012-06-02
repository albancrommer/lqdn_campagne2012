function showMore(more_div) {
   more_div.animate();
}

$(document).ready(function() {

    // switches text and figure
    function switchAnime( domElement ){

        var text            = domElement.parent().next().html()
        var panel           = $(".anime_display")
        var panel_text      = $(panel).find("#anime_text")
        panel_text.html(text);
        $('#figure_img').attr('src','images/perso_' + domElement.attr('perso_id') + '.png');
        panel.show();

    }

    // mouseOver
    $("a.anime_point").mouseover(function(){

        $(window).data("last", $(this).html())
        console.log( $(window).data("last" ) )
        switchAnime( $(this));
    });

    // gifts
    $(".amounts_holder input").click(function(e){
        var src = $(this).parent("div").find(".alert")
        var tgt = $(".giftContainer")
        tgt.show().html(src.html())
    })
    // Sets the progress bar
    $( "#progress_bar" ).progressbar({
        value: 37
    });

    // Activated the default donation radio button
    $('.donations input[selected=selected]').click();
})

