$(".f-section-wrap .f-category .icon")
    .mouseover(function() {
        $(this).attr('src', $(this).attr("src").replace('.svg', '-rollover-active.svg'))
    })
    .mouseout(function() {
        $(this).attr('src', $(this).attr("src").replace('-rollover-active.svg', '.svg'))
    });

function editProfile() {
    $(".box-wrap input, .box-wrap textarea").attr('disabled', false);
    $(".edit-visible").removeClass("hidden");
    $(".info-visible").addClass("hidden");
}

function cancelEditProfile() {
    $(".box-wrap input, .box-wrap textarea").attr('disabled', true);
    $(".info-visible").removeClass("hidden");
    $(".edit-visible").addClass("hidden");
}