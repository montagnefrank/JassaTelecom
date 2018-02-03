<?php /////////////////////////////////////////////////////////////////////////////// ABOUT MODEL               ?>
<script>
    function addnewabouttitles() {

        $.when(
                $("#edittitles .beforeLoad").toggle(),
                $("#edittitles .loading_img").toggle(),
                $("#edittitles").attr("id", "edittitles_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".aboutTitle").val();
                        var subtitle = $('.aboutSubtitle').val();
                        if (title == '' || subtitle == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#edittitles_clicked .beforeLoad").toggle();
                            $("#edittitles_clicked .loading_img").toggle();
                            $("#edittitles_clicked").attr("id", "edittitles");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('edittitles', 'true');
                        formData.append('aboutTitle', title);
                        formData.append('aboutSubtitle', subtitle);

                        $.ajax({
                            url: 'assets/modules/about/control.php',
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
    }

    function updatetexts() {

        $.when(
                $("#updatetexts .beforeLoad").toggle(),
                $("#updatetexts .loading_img").toggle(),
                $("#updatetexts").attr("id", "updatetexts_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var quisom = $(".textoquisom").val();
                        var mision = $('.textomision').val();
                        var vision = $('.textovision').val();
                        if (quisom == '' || mision == '' || vision == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#updatetexts_clicked .beforeLoad").toggle();
                            $("#updatetexts_clicked .loading_img").toggle();
                            $("#updatetexts_clicked").attr("id", "updatetexts");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('editquisom', 'true');
                        formData.append('quisomText', quisom);
                        formData.append('misionText', mision);
                        formData.append('visionText', vision);

                        $.ajax({
                            url: 'assets/modules/about/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#updatetexts_clicked .beforeLoad").toggle();
                                $("#updatetexts_clicked .loading_img").toggle();
                                $("#updatetexts_clicked").attr("id", "updatetexts");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    }

    $(document).on("click", ".funfact", function (event) {
        event.preventDefault();
        var title = $(this).find(".ff_title").html();
        var type = $(this).find(".ff_num").val();
        $.when($(".ff_insert_panel").slideUp("slow")).then(function () {
            $(".ff_insert_panel").slideDown("slow");
            $(".ff_windowstitle").html(title);
            $(".ffnum").val(type);
        });

    });

    function newffinput() {

        $.when(
                $("#editff .beforeLoad").toggle(),
                $("#editff .loading_img").toggle(),
                $("#editff").attr("id", "editff_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var amount = $(".newff").val();
                        var title = $(".newfftitle").val();
                        var type = $(".ffnum").val();
                        if (amount == '') {
                            noty({text: 'No se puede cargar el campo vacio', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#editff_clicked .beforeLoad").toggle();
                            $("#editff_clicked .loading_img").toggle();
                            $("#editff_clicked").attr("id", "editff");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('newFF', 'true');
                        formData.append('newFF_data', amount);
                        formData.append('newFF_title', title);
                        formData.append('newFF_type', type);

                        $.ajax({
                            url: 'assets/modules/about/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#editff_clicked .beforeLoad").toggle();
                                $("#editff_clicked .loading_img").toggle();
                                $("#editff_clicked").attr("id", "editff");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    }

    $(document).ready(function () {
        $(".newff").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
    });
</script>