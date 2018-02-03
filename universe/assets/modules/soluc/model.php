<?php
/////////////////////////////////////////////////////////////////////////////// SOLUC MODEL
?>
<script>
    $(document).on("click", "#editsoluc", function (event) {
        event.preventDefault();
        $.when(
                $("#editsoluc .beforeLoad").toggle(),
                $("#editsoluc .loading_img").toggle(),
                $(this).attr("id", "editsoluc_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#editsoluc_clicked").click();
                    }, 1000);
                });
    });
    
    $(document).on("click", "#edittitles", function (event) {
        event.preventDefault();
        $.when(
                $("#edittitles .beforeLoad").toggle(),
                $("#edittitles .loading_img").toggle(),
                $(this).attr("id", "edittitles_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".solucTitle").val();
                        var subtitle = $('.solucSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('solucTitle', $('.solucTitle').val());
                        formData.append('solucSubtitle', $('.solucSubtitle').val());

                        $.ajax({
                            url: 'assets/modules/soluc/control.php',
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

    function notyConfirm(id) {

        noty({
            text: 'Seguro que quieres eliminar?',
            layout: 'topRight',
            buttons: [
                {addClass: 'btn btn-success btn-clean', text: 'Si', onClick: function ($noty) {
                        var formData = new FormData();
                        formData.append('deletesoluc', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/soluc/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
//                                console.log(data);
                                noty({text: 'Servicio eliminado', layout: 'topRight', type: 'success'}).setTimeout(2000);
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        ;
                    }
                },
                {addClass: 'btn btn-danger btn-clean', text: 'Cancelar', onClick: function ($noty) {
                        $noty.close();
                    }
                }
            ]
        }).setTimeout(4000);
    }

    function addnew() {

        $.when(
                $("#addnewsoluc .beforeLoad").toggle(),
                $("#addnewsoluc .loading_img").toggle(),
                $("#addnewsoluc").attr("id", "addnewsoluc_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".newsolucTitle").val();
                        var subtitle = $('.newsolucSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#addnewsoluc_clicked .beforeLoad").toggle();
                            $("#addnewsoluc_clicked .loading_img").toggle();
                            $("#addnewsoluc_clicked").attr("id", "addnewsoluc");
                            return;
                        }
                        var formData = new FormData();
                        formData.append('newsoluc', 'true');
                        formData.append('newsolucTitle', title);
                        formData.append('newsolucSubtitle', subtitle);
                        formData.append('icon', $("#pick_icon input:eq(0)").val());

                        $.ajax({
                            url: 'assets/modules/soluc/control.php',
                            type: 'POST',
                            data: formData,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#addnewsoluc_clicked .beforeLoad").toggle();
                                $("#addnewsoluc_clicked .loading_img").toggle();
                                $("#addnewsoluc_clicked").attr("id", "addnewsoluc");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    }

    $("#file-simple2").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });

    $(document).on("click", "#slouc_bg_btn", function (event) {
        event.preventDefault();
        $.when(
                $("#slouc_bg_btn .beforeLoad").toggle(),
                $("#slouc_bg_btn .loading_img").toggle(),
                $(this).attr("id", "slouc_bg_btn_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('slouc_bg_btn', 'true');
                        formData.append('slouc_bg_file', $('input[type=file]')[0].files[0]);
                        $.ajax({
                            url: 'assets/modules/soluc/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#slouc_bg_btn_clicked .beforeLoad").toggle();
                                $("#slouc_bg_btn_clicked .loading_img").toggle();
                                $("#slouc_bg_btn_clicked").attr("id", "slouc_bg_btn");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
</script>