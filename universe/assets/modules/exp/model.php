<?php
/////////////////////////////////////////////////////////////////////////////// BANNER MODEL
?>
<script>
    $("#file-simple1,#file-simple2,#file-simple3,#file-simple4").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });
    
    $(document).on("click", "#saveBanner", function (event) {
        event.preventDefault();
        $.when(
                $("#saveBanner .beforeLoad").toggle(),
                $("#saveBanner .loading_img").toggle(),
                $(this).attr("id", "saveBanner_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var title = $(".editTitle").val();
                        var subtitle = $(".editSubtitle").val();
                        var text = $(".editText").val();
                        var check = $("input[name='edtCheck']").val();
                        if (title == '' || subtitle == '' || text == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#saveBanner_clicked .beforeLoad").toggle();
                            $("#saveBanner_clicked .loading_img").toggle();
                            $("#saveBanner_clicked").attr("id", "saveBanner");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('editBanner', 'true');
                        formData.append('bannerTitle', title);
                        formData.append('bannerSubtitle', subtitle);
                        formData.append('bannerText', text);
                        formData.append('img1Banner', $('input[type=file]')[0].files[0]);
                        formData.append('img2Banner', $('input[type=file]')[1].files[0]);
                        formData.append('img3Banner', $('input[type=file]')[2].files[0]);

                        $.ajax({
                            url: 'assets/modules/exp/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#saveBanner_clicked .beforeLoad").toggle();
                                $("#saveBanner_clicked .loading_img").toggle();
                                $("#saveBanner_clicked").attr("id", "saveBanner");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
</script>