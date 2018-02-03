<?php
/////////////////////////////////////////////////////////////////////////////// PORTFOLIO MODEL
?>
<script>
    $("#edittitles").on("click", function (event) {
        event.preventDefault();
        $.when(
                $("#edittitles .beforeLoad").toggle(),
                $("#edittitles .loading_img").toggle(),
                $(this).attr("id", "edittitles_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".portTitle").val();
                        var subtitle = $('.portSubtitle').val();
                        var title2 = $('.portTitle2').val();
                        var subtitle2 = $('.portSubtitle2').val();
                        if (title == '' || subtitle == '' || title2 == '' || subtitle2 == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('portTitle', $('.portTitle').val());
                        formData.append('portSubtitle', $('.portSubtitle').val());
                        formData.append('portTitle2', $('.portTitle2').val());
                        formData.append('portSubtitle2', $('.portSubtitle2').val());

                        $.ajax({
                            url: 'assets/modules/port/control.php',
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

    $(document).on("click", ".switch-ro", function (event) {
        event.preventDefault();
    });

    $(document).on("click", ".switchmodal", function (event) {
        var value = $(".switchmodal").val();
        if (value == '1') {
            $(".switchmodal").val("0");
        }
        if (value == '0') {
            $(".switchmodal").val("1");
        }
    });

    $(document).on("click", "#savePort", function (event) {
        event.preventDefault();
        $.when(
                $("#savePort .beforeLoad").toggle(),
                $("#savePort .loading_img").toggle(),
                $(this).attr("id", "savePort_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".editTitle").val();
                        var subtitle = $(".editSubtitle").val();
                        var text = $(".editText").val();
                        var id = $("#idPort").val();
                        var check = $("input[name='edtCheck']").val();
                        if (title == '' || subtitle == '' || text == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#savePort_clicked .beforeLoad").toggle();
                            $("#savePort_clicked .loading_img").toggle();
                            $("#savePort_clicked").attr("id", "savePort");
                            return;
                        }

                        var formData = new FormData();
                        if (id == 'new') {
                            formData.append('newport', 'true');
                        } else {
                            formData.append('editPort', 'true');
                        }
                        formData.append('portTitle', title);
                        formData.append('portSubtitle', subtitle);
                        formData.append('portText', text);
                        formData.append('portId', id);
                        formData.append('portCheck', check);
                        formData.append('img1Port', $('input[type=file]')[1].files[0]);
                        formData.append('img2Port', $('input[type=file]')[2].files[0]);
                        formData.append('img3Port', $('input[type=file]')[3].files[0]);

                        $.ajax({
                            url: 'assets/modules/port/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#savePort_clicked .beforeLoad").toggle();
                                $("#savePort_clicked .loading_img").toggle();
                                $("#savePort_clicked").attr("id", "savePort");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });

    $(document).on("click", ".showmodal", function (event) {
        $("#modal").modal("toggle");
        $("#modalheadtitle").html("Nuevo Proyecto");
        $(".editTitle").val('');
        $(".editSubtitle").val('');
        $(".editText").val('');
        $("#idPort").val("new");
    });

    $("#file-simple1,#file-simple2,#file-simple3,#file-simple4").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });

    $(document).on("click", ".editarPort", function (event) {
        event.preventDefault();
        $("#modalheadtitle").html("Editar Proyecto");
        var title = $(this).parent().parent().find(".port_title").html().trim();
        var subtitle = $(this).parent().parent().find(".port_subtitle").html().trim();
        var text = $(this).parent().parent().find(".port_text").html().trim();
        var id = $(this).parent().parent().find(".port_id").html().trim();

        $(".editTitle").val(title);
        $(".editSubtitle").val(subtitle);
        $(".editText").val(text);
        $("#idPort").val(id);
    });

    function notyConfirm(id) {

        noty({
            text: 'Seguro que quieres eliminar?',
            layout: 'topRight',
            buttons: [
                {addClass: 'btn btn-success btn-clean', text: 'Si', onClick: function ($noty) {
                        var formData = new FormData();
                        formData.append('deletePort', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/port/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
//                                console.log(data);
                                noty({text: 'Proyecto del portafolio eliminado', layout: 'topRight', type: 'success'}).setTimeout(2000);
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
        }).setTimeout(2000);
    }

    $(document).on("click", "#newPDFbtn", function (event) {
        event.preventDefault();
        $.when(
                $("#newPDFbtn .beforeLoad").toggle(),
                $("#newPDFbtn .loading_img").toggle(),
                $(this).attr("id", "newPDFbtn_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('newPDF', 'true');
                        // Attach file
                        formData.append('newPDF_file', $('input[type=file]')[0].files[0]);

                        $.ajax({
                            url: 'assets/modules/port/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#newPDFbtn_clicked .beforeLoad").toggle();
                                $("#newPDFbtn_clicked .loading_img").toggle();
                                $("#newPDFbtn_clicked").attr("id", "newPDFbtn");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
</script>