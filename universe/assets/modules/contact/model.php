<?php
/////////////////////////////////////////////////////////////////////////////// CONTACT MODEL
?>
<script>
   
    $(document).on("click", "#edittitles", function (event) {
        event.preventDefault();
        $.when(
                $("#edittitles .beforeLoad").toggle(),
                $("#edittitles .loading_img").toggle(),
                $(this).attr("id", "edittitles_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".contactTitle").val();
                        var subtitle = $('.contactSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('contactTitle', title);
                        formData.append('contactSubtitle', subtitle);

                        $.ajax({
                            url: 'assets/modules/contact/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#edittitles_clicked .beforeLoad").toggle();
                                $("#edittitles_clicked .loading_img").toggle();
                                $("#edittitles_clicked").attr("id", "edittitles");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
</script>