$(function () {
    $(".menu-link").click(function () {
        $(".menu-link").removeClass("is-active");
        $(this).addClass("is-active");
    });
});

const dropdowns = document.querySelectorAll(".dropdown");
dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdowns.forEach((c) => c.classList.remove("is-active"));
        dropdown.classList.add("is-active");
    });
});

$(".search-bar input")
    .focus(function () {
        $(".header").addClass("wide");
    })
    .blur(function () {
        $(".header").removeClass("wide");
    });

$(document).click(function (e) {
    var container = $(".status-button");
    var dd = $(".dropdown");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        dd.removeClass("is-active");
    }
});

$(function () {
    $(".dropdown").on("click", function (e) {
        $(".content-wrapper").addClass("overlay");
        e.stopPropagation();
    });
    $(document).on("click", function (e) {
        if ($(e.target).is(".dropdown") === false) {
            $(".content-wrapper").removeClass("overlay");
        }
    });
});

$(function () {
    $(".status-button:not(.open)").on("click", function (e) {
        $(".overlay-app").addClass("is-active");
    });
    $(".pop-up .close").click(function () {
        $(".overlay-app").removeClass("is-active");
    });
});

$(".status-button:not(.open)").click(function () {
    $(".pop-up").addClass("visible");
});

$(".pop-up .close").click(function () {
    $(".pop-up").removeClass("visible");
});

const toggleButton = document.querySelector(".dark-light");

toggleButton.addEventListener("click", () => {
    document.body.classList.toggle("light-mode");
});

$(document).ready(function () {
    $(".header-menu a").click(function () {
        var zugTab = $(this).attr("id").split("_")[1];
        console.log(zugTab);
        $(".header-menu a").removeClass("is-active");
        $("#tab_" + zugTab).addClass("is-active");
        $(".table-plot").removeClass("show");
        $("#list_" + zugTab).addClass("show");
    });
    var table = $("#lender-table").DataTable({
        select: false,
        columnDefs: [
            {
                className: "Name",
                targets: [0],
                visible: false,
                searchable: false,
            },
        ],
    }); //End of create main table

    $("#lender-table tbody").on("click", "tr", function () {
        alert(table.row(this).data()[0]);
    });
    var table = $("#buyer-table").DataTable({
        select: false,
        columnDefs: [
            {
                className: "Name",
                targets: [0],
                visible: false,
                searchable: false,
            },
        ],
    }); //End of create main table

    $("#buyer-table tbody").on("click", "tr", function () {});
    $('[data-toggle="tooltip"]').tooltip();
});
