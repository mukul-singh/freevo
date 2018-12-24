$(".f-section-wrap .f-category .icon")
    .mouseover(function() {
        $(this).attr('src', $(this).attr("src").replace('.svg', '-rollover-active.svg'))
    })
    .mouseout(function() {
        $(this).attr('src', $(this).attr("src").replace('-rollover-active.svg', '.svg'))
    });

function openNav() {
    document.getElementById("mySidenav").style.left = "0%";
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-70%";
}
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

function nextGiveawayStep(e) {
    if($(".box-wrap #step2").attr("aria-valuenow") < 80) {
        $(".box-wrap #step1").css('width', '100%').attr("aria-valuenow", 100)
        $(".box-wrap #step2").css('width', '80%').attr("aria-valuenow", 80);
        $(".box-wrap #step2-pin").addClass("bg-pink").removeClass("bg-dark-grey");
    }
    else if($(".box-wrap #step3").attr("aria-valuenow") < 80) {
        $(".box-wrap #step2").css('width', '100%').attr("aria-valuenow", 100)
        $(".box-wrap #step3").css('width', '80%').attr("aria-valuenow", 80);
        $(".box-wrap #step3-pin").addClass("bg-pink").removeClass("bg-dark-grey");
    }
    else {
        $(".box-wrap #step3").css('width', '100%').attr("aria-valuenow", 100);
        $(".box-wrap #step4-pin").addClass("bg-pink").removeClass("bg-dark-grey");
        $(e).remove();
    }
}

function selectItemCategory(e) {
    if(!$(e).hasClass("active")) {
        $(".select-category-wrap").removeClass("active");
        $(e).addClass("active");
        $(".select-category-wrap .cat-select").remove();
        $(".select-category-wrap .cat-img").each(function() {
            if($(this).parent().hasClass("active")) {
                $(this).attr("src", $(this).attr("src").replace(".svg", "-rollover-active.svg"));
                $(this).parent().append('<img src="' + BASE_URL + 'assets/images/icons/confirmed.svg" class="cat-select">');
            }
            else {
                $(this).attr("src", $(this).attr("src").replace("-rollover-active.svg", ".svg"));
            }
        });
    }
}

$("#img-catalog.carousel .carousel-item img").click(function() {
    $("#img-catalog.carousel .carousel-item img").removeClass("active");
    $(this).addClass("active");
    $("#img-view img").attr("src", $(this).attr("data-full-img"));
});

function getFgtPwdModal() {
    $(".login-wrap, .new-pwd-wrap").hide();
    $(".fgt-pwd-wrap").show();
}

function getLoginModal() {
    $(".fgt-pwd-wrap, .new-pwd-wrap").hide();
    $(".login-wrap").show();
}

function getNewPwdModal() {
    $(".login-wrap, .fgt-pwd-wrap").hide();
    $(".new-pwd-wrap").show();
}