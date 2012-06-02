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

    // click
    $("a.anime_point").click(function(){

        var state       = $(window).data('state')
        var last        = $(window).data('last')

        // Hide only if last click was on the same item
        if( "active" == state && last == $(this).html() ){
            $(window).data("state","inactive")
            $(window).data("last", "")
            var panel   = $(".anime_display");
            panel.hide();
        }else{
            $(window).data("state","active")
            $(window).data("last",$(this).html())
            switchAnime( $(this));
        }
    });

    // mouseOut
    $("a.anime_point").mouseout(function(){
        var state      = $(window).data('state')
        if( undefined == state || "inactive" == state ){
            var panel = $(".anime_display");
            panel.hide();
        }
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

