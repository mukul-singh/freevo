$(".f-section-wrap .f-category .icon")
    .mouseover(function() {
        $(this).attr('src', $(this).attr("src").replace('.svg', '-rollover-active.svg'))
    })
    .mouseout(function() {
        $(this).attr('src', $(this).attr("src").replace('-rollover-active.svg', '.svg'))
    });

function editSection(e) {
    $(e).parent().parent().find("input, textarea").attr('disabled', false);
    $(e).parent().find(".edit-visible").removeClass("hidden");
    $(e).parent().find(".info-visible").addClass("hidden");
}

function cancelEditSection(e) {
    $(e).parent().parent().find("input, textarea").attr('disabled', true);
    $(e).parent().find(".info-visible").removeClass("hidden");
    $(e).parent().find(".edit-visible").addClass("hidden");
}