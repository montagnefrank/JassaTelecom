<?php
/////////////////////////////////////////////////////////////////////////////// HEADER MODEL
?>
<script>
    $(document).on("click", "#editmenu", function (event) {
        event.preventDefault();
        $.when(
                $("#editmenu .beforeLoad").toggle(),
                $("#editmenu .loading_img").toggle(),
                $(this).attr("id", "editmenu_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#editmenu_clicked").click();
                    }, 1000);
                });
    });
    
    $(document).on("click", "#submitnewlogo", function (event) {
        event.preventDefault();
        $.when(
                $("#submitnewlogo .beforeLoad").toggle(),
                $("#submitnewlogo .loading_img").toggle(),
                $(this).attr("id", "submitnewlogo_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#submitnewlogo_clicked").click();
                    }, 1000);
                });
    });
    
    $(document).on("click", "#slide1newimg", function (event) {
        event.preventDefault();
        $.when(
                $("#slide1newimg .beforeLoad").toggle(),
                $("#slide1newimg .loading_img").toggle(),
                $(this).attr("id", "slide1newimg_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('slide1newimg', 'true');
                        formData.append('uptext', $('.uptext1').val());
                        formData.append('centertext', $('.centertext1').val());
                        formData.append('bottomtext', $('.bottomtext1').val());
                        formData.append('buttext', $('.buttext1').val());
                        // Attach file
                        formData.append('slide1file', $('input[type=file]')[1].files[0]);

                        $.ajax({
                            url: 'assets/modules/header/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#slide1newimg_clicked .beforeLoad").toggle();
                                $("#slide1newimg_clicked .loading_img").toggle();
                                $("#slide1newimg_clicked").attr("id", "slide1newimg");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });

    $(document).on("click", "#slide2newimg", function (event) {
        event.preventDefault();
        $.when(
                $("#slide2newimg .beforeLoad").toggle(),
                $("#slide2newimg .loading_img").toggle(),
                $(this).attr("id", "slide2newimg_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('slide2newimg', 'true');
                        formData.append('uptext', $('.uptext2').val());
                        formData.append('centertext', $('.centertext2').val());
                        formData.append('bottomtext', $('.bottomtext2').val());
                        formData.append('buttext', $('.buttext2').val());
                        // Attach file
                        formData.append('slide2file', $('input[type=file]')[2].files[0]);

                        $.ajax({
                            url: 'assets/modules/header/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#slide2newimg_clicked .beforeLoad").toggle();
                                $("#slide2newimg_clicked .loading_img").toggle();
                                $("#slide2newimg_clicked").attr("id", "slide2newimg");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });

    $(document).on("click", "#slide3newimg", function (event) {
        event.preventDefault();
        $.when(
                $("#slide3newimg .beforeLoad").toggle(),
                $("#slide3newimg .loading_img").toggle(),
                $(this).attr("id", "slide3newimg_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('slide3newimg', 'true');
                        formData.append('uptext', $('.uptext3').val());
                        formData.append('centertext', $('.centertext3').val());
                        formData.append('bottomtext', $('.bottomtext3').val());
                        formData.append('buttext', $('.buttext3').val());
                        // Attach file
                        formData.append('slide3file', $('input[type=file]')[3].files[0]);

                        $.ajax({
                            url: 'assets/modules/header/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#slide3newimg_clicked .beforeLoad").toggle();
                                $("#slide3newimg_clicked .loading_img").toggle();
                                $("#slide3newimg_clicked").attr("id", "slide3newimg");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });

    $("#file-simple,#file-simple2,#file-simple3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });
</script>