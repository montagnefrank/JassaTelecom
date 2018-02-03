<?php
/////////////////////////////////////////////////////////////////////////////// TWEETS MODEL
?>
<script>
    $(document).on("click", "#edittweets", function (event) {
        event.preventDefault();
        $.when(
                $("#edittweets .beforeLoad").toggle(),
                $("#edittweets .loading_img").toggle(),
                $(this).attr("id", "edittweets_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#edittweets_clicked").click();
                    }, 1000);
                });
    });

    $(document).on("click", "#bgTweet_btn", function (event) {
        event.preventDefault();
        $.when(
                $("#bgTweet_btn .beforeLoad").toggle(),
                $("#bgTweet_btn .loading_img").toggle(),
                $(this).attr("id", "bgTweet_btn_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var formData = new FormData();
                        formData.append('bgTweet_btn', 'true');
                        // Attach file
                        formData.append('bgTweet_file', $('input[type=file]')[0].files[0]);

                        $.ajax({
                            url: 'assets/modules/tweets/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#bgTweet_btn_clicked .beforeLoad").toggle();
                                $("#bgTweet_btn_clicked .loading_img").toggle();
                                $("#bgTweet_btn_clicked").attr("id", "bgTweet_btn");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });

    $("#file-simple2").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });

    function notyConfirm(id) {

        noty({
            text: 'Seguro que quieres eliminar?',
            layout: 'topRight',
            buttons: [
                {addClass: 'btn btn-success btn-clean', text: 'Si', onClick: function ($noty) {
                        var formData = new FormData();
                        formData.append('deleteTweet', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/tweets/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
//                                console.log(data);
                                noty({text: 'Testimonio eliminado', layout: 'topRight', type: 'success'}).setTimeout(2000);
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
                $("#addnewtweet .beforeLoad").toggle(),
                $("#addnewtweet .loading_img").toggle(),
                $("#addnewtweet").attr("id", "addnewtweet_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var name = $(".newnameTweet").val();
                        var tweet = $('.newtextTweet').val();
                        if (name == '' || tweet == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                            $("#addnewtweet_clicked .beforeLoad").toggle();
                            $("#addnewtweet_clicked .loading_img").toggle();
                            $("#addnewtweet_clicked").attr("id", "addnewtweet");
                            return;
                        }
                        var formData = new FormData();
                        formData.append('newtweet', 'true');
                        formData.append('nameTweet', name);
                        formData.append('textTweet', tweet);

                        $.ajax({
                            url: 'assets/modules/tweets/control.php',
                            type: 'POST',
                            data: formData,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#addnewtweet_clicked .beforeLoad").toggle();
                                $("#addnewtweet_clicked .loading_img").toggle();
                                $("#addnewtweet_clicked").attr("id", "addnewtweet");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    }
</script>