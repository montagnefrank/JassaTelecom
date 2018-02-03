<?php
/////////////////////////////////////////////////////////////////////////////// TEAM MODEL
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
                        var title = $(".teamTitle").val();
                        var subtitle = $('.teamSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('teamTitle', title);
                        formData.append('teamSubtitle', subtitle);

                        $.ajax({
                            url: 'assets/modules/team/control.php',
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

    $(document).on("click", "#editmember", function (event) {
        event.preventDefault();
        $.when(
                $("#editmember .beforeLoad").toggle(),
                $("#editmember .loading_img").toggle(),
                $(this).attr("id", "editmember_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var img = $('input[type=file]')[0].files[0];
                        var nombre = $('input[name=name_team]').val();
                        var cargo = $('input[name=job_team]').val();
                        var perfil = $('input[name=profile_team]').val();
                        var fb = $('input[name=fb_team]').val();
                        var tw = $('input[name=tw_team]').val();
                        var ig = $('input[name=ig_team]').val();
                        var check = $("input[name='status_check']").val();
                        var id = $('input[name=memberid]').val();
                        var type = $("#typeaction").attr("name");
                        if (nombre == '' || cargo == '' || perfil == '' || fb == '' || tw == '' || ig == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#editmember_clicked .beforeLoad").toggle();
                                $("#editmember_clicked .loading_img").toggle();
                                $("#editmember_clicked").attr("id", "editmember");
                            return;
                        }

                        var formData = new FormData();
                        if (type == 'newmember') {
                            formData.append('newmember', 'true');
                        } else {
                            formData.append('editmember', 'true');
                        }

                        formData.append('photoTeam', img);
                        formData.append('nameTeam', nombre);
                        formData.append('jobTeam', cargo);
                        formData.append('profileTeam', perfil);
                        formData.append('fbTeam', fb);
                        formData.append('twTeam', tw);
                        formData.append('igTeam', ig);
                        formData.append('statusTeam', check);
                        formData.append('idTeam', id);

                        $.ajax({
                            url: 'assets/modules/team/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#editmember_clicked .beforeLoad").toggle();
                                $("#editmember_clicked .loading_img").toggle();
                                $("#editmember_clicked").attr("id", "editmember");
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
                        formData.append('deletemember', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/team/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
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

    $("#file-simple1").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
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

    $(document).on("click", ".editprofile", function (event) {
        event.preventDefault();
        var name = $(this).parent().parent().find(".profile-data-name").html();
        var job = $(this).parent().parent().find(".profile-data-title").html();
        var profile = $(this).parent().parent().parent().find(".teamprofile .help-block").html();
        var fb = $(this).parent().parent().parent().find(".fbprofile .help-block span:eq(1)").html();
        var tw = $(this).parent().parent().parent().find(".twprofile .help-block span:eq(1)").html();
        var ig = $(this).parent().parent().parent().find(".igprofile .help-block span:eq(1)").html();
        var id = $(this).parent().parent().parent().find(".idteam .help-block").html();
        $(".newmember").parent().slideUp("slow");
        $.when($(".hidethis").slideUp("slow")).then(function () {
            $(".hidethis").slideDown("slow");
            $(".memberformpanel").find("input[name=name_team]").val(name);
            $(".memberformpanel").find("input[name=job_team]").val(job);
            $(".memberformpanel").find("input[name=profile_team]").val(profile);
            $(".memberformpanel").find("input[name=fb_team]").val(fb);
            $(".memberformpanel").find("input[name=tw_team]").val(tw);
            $(".memberformpanel").find("input[name=ig_team]").val(ig);
            $(".memberformpanel").find("input[name=memberid]").val(id);
            $("#typeaction").attr("name", "editmember");
        });

    });

    $(document).on("click", ".newmember", function (event) {
        event.preventDefault();
        $(this).parent().slideUp("slow");
        $.when($(".hidethis").slideUp("slow")).then(function () {
            $(".hidethis").slideDown("slow");
        });

    });
</script>