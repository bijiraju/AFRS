// document.getElementById("p").setAttribute("hidden", "");
// document.getElementById("myDiv").setAttribute("hidden", "");
// document.getElementById("my").setAttribute("hidden", "");
$("#p").hide(),
    $("#my").hide(),
    $("#myDiv").hide(),
    $(document).ready(function () {
        $("#button1").click(function () {
            $("#p").toggle();
            $("#my").hide();
            $("#myDiv").hide();
        });
    });

$(document).ready(function () {
    $("#button2").click(function () {
        $("#myDiv").toggle();
        $("#p").hide();
        $("#my").hide();
    });
});

$(document).ready(function () {
    $("#button3").click(function () {
        $("#my").toggle();
        $("#myDiv").hide();
        $("#p").hide();
    });
});
