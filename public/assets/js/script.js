$(".f-section-wrap .f-category .icon")
    .mouseover(function() {
        $(this).attr('src', $(this).attr("src").replace('.svg', '-rollover-active.svg'))
    })
    .mouseout(function() {
        $(this).attr('src', $(this).attr("src").replace('-rollover-active.svg', '.svg'))
    });

