<?php
/////////////////////////////////////////////////////////////////////////////// CLIENTS MODEL
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
                        var title = $(".clientsTitle").val();
                        var subtitle = $('.clientsSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('clientsTitle', title);
                        formData.append('clientsSubtitle', subtitle);

                        $.ajax({
                            url: 'assets/modules/cli/control.php',
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
    
    $("#file-simple1").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });
    
    $(document).on("click", "#newclient", function (event) {
        event.preventDefault();
        $.when(
                $("#newclient .beforeLoad").toggle(),
                $("#newclient .loading_img").toggle(),
                $(this).attr("id", "newclient_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var img = $('input[type=file]')[0].files[0];
                        var nombre = $('input[name=name_client]').val();
                        var check = $("input[name='status_check']").val();
                        if (nombre == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#newclient_clicked .beforeLoad").toggle();
                                $("#newclient_clicked .loading_img").toggle();
                                $("#newclient_clicked").attr("id", "newclient");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('newclient', 'true');
                        formData.append('photoClient', img);
                        formData.append('nameClient', nombre);
                        formData.append('statusClient', check);

                        $.ajax({
                            url: 'assets/modules/cli/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#newclient_clicked .beforeLoad").toggle();
                                $("#newclient_clicked .loading_img").toggle();
                                $("#newclient_clicked").attr("id", "newclient");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
    
    $(document).on("click", ".switchcheck", function (event) {
        var value = $(".switchcheck").val();
        if (value == '1') {
            $(".switchcheck").val("0");
        }
        if (value == '0') {
            $(".switchcheck").val("1");
        }
    });
    
    $(document).on("click", "#editclient", function (event) {
        event.preventDefault();
        $.when(
                $("#editclient .beforeLoad").toggle(),
                $("#editclient .loading_img").toggle(),
                $(this).attr("id", "editclient_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#editclient_clicked").click();
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
                        formData.append('deleteclient', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/cli/control.php',
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
</script>