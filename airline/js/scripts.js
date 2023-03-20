$(document).ready(function () {
    $("#p").hide(),
        $("#my").hide(),
        $("#myDiv").hide(),
        $("#myroute").hide(),
        $("#pp").hide();
});

$(document).ready(function () {
    $("#button1").click(function () {
        $("#p").toggle();
        $("#my").hide();
        $("#myDiv").hide();
        $("#myroute").hide();
        $("#pp").hide();
    });
});

$(document).ready(function () {
    $("#button2").click(function () {
        $("#myDiv").toggle();
        $("#p").hide();
        $("#my").hide();
        $("#myroute").hide();
        $("#pp").hide();
    });
});

$(document).ready(function () {
    $("#button3").click(function () {
        $("#my").toggle();
        $("#myDiv").hide();
        $("#p").hide();
        $("#myroute").hide();
        $("#pp").hide();
    });
});

$(document).ready(function () {
    $("#button4").click(function () {
        $("#myroute").toggle();
        $("#myDiv").hide();
        $("#p").hide();
        $("#my").hide();
        $("#pp").hide();
    });
});

$(document).ready(function () {
    $("#buttonn").click(function () {
        $("#myroute").hide();
        $("#myDiv").hide();
        $("#p").hide();
        $("#my").hide();
        $("#pp").toggle();
    });
});

// CODE FOR PASSENGERS
