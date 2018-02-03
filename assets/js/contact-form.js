
$(document).ready(function () {
    //replace #joinform with id of form you are using
    var rnuma = Math.floor(Math.random() * 5);
    var rnumb = Math.floor(Math.random() * 5);
    var sum = rnuma + rnumb;
    $("body").append("<textarea id='math' style='display:none;'></textarea>");
    $("#math").html(sum);
    $("#verify").attr("placeholder", rnuma + "+" + rnumb + "= ?");
    // Validate Contact Form
    $("#contact_form").validate({
        rules: {
            verify: {
                equalTo: "#math"
            }
        },
        showErrors: function (map, list) {
            this.currentElements.removeClass("error_warning");
            $.each(list, function (index, error) {
                $(error.element).addClass("error_warning");
                $("#contact_form div.error_message").fadeIn(300);
            });
        },
        submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "universe/assets/scripts/conocer.php",
                data: $('#contact_form').serialize(),
                success: function (msg) {
                    if (msg == 'SEND') {
                        $("#contact_form div.error_message").fadeOut(300);
                        setTimeout(function () {
                            $("#contact_form div.submit_message").fadeIn(300);
                        }, 1000);
                        $(".contactformsubmit").attr("disabled","disabled");
                    } else {
                        $("#contact_form div.submit_message").fadeOut(300);
                        setTimeout(function () {
                            $("#contact_form div.error_message").fadeIn(300);
                        }, 1000);
                    }
                    console.log(msg);
                },
                error: function (error) {
                    console.log('Disculpe, existió un problema');
                    console.log(error);
                },
                complete: function (xhr, status) {
                    console.log('Petición realizada');
                }
            });
        }
    });
});











						