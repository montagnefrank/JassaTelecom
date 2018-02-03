<?php
/////////////////////////////////////////////////////////////////////////////// SERVICES MODEL
?>
<script>
    $(document).on("click", "#editserv", function (event) {
        event.preventDefault();
        $.when(
                $("#editserv .beforeLoad").toggle(),
                $("#editserv .loading_img").toggle(),
                $(this).attr("id", "editserv_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#editserv_clicked").click();
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
                        var title = $(".serviceTitle").val();
                        var subtitle = $('.serviceSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('serviceTitle', $('.serviceTitle').val());
                        formData.append('serviceSubtitle', $('.serviceSubtitle').val());

                        $.ajax({
                            url: 'assets/modules/serv/control.php',
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
                        formData.append('deleteserv', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/serv/control.php',
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
                $("#addnewservice .beforeLoad").toggle(),
                $("#addnewservice .loading_img").toggle(),
                $("#addnewservice").attr("id", "addnewservice_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".newserviceTitle").val();
                        var subtitle = $('.newserviceSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#addnewservice_clicked .beforeLoad").toggle();
                            $("#addnewservice_clicked .loading_img").toggle();
                            $("#addnewservice_clicked").attr("id", "addnewservice");
                            return;
                        }
                        var formData = new FormData();
                        formData.append('newservice', 'true');
                        formData.append('newserviceTitle', title);
                        formData.append('newserviceSubtitle', subtitle);
                        formData.append('icon', $("#pick_icon input:eq(0)").val());

                        $.ajax({
                            url: 'assets/modules/serv/control.php',
                            type: 'POST',
                            data: formData,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#addnewservice_clicked .beforeLoad").toggle();
                                $("#addnewservice_clicked .loading_img").toggle();
                                $("#addnewservice_clicked").attr("id", "addnewservice");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    }
</script>