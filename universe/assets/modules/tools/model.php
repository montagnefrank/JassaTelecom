<?php
/////////////////////////////////////////////////////////////////////////////// TOOLS MODEL
?>
<script>
    var validatepass = $("#passupdate").validate({
        ignore: [],
        rules: {
            oldpass: {
                required: true,
                minlength: 8,
                maxlength: 16
            },
            newpass: {
                required: true,
                minlength: 8,
                maxlength: 16
            },
            reppass: {
                required: true,
                minlength: 8,
                maxlength: 16,
                equalTo: "#newpass"
            }
        }
    });
    
    $(document).on("click", "#submitnewpass", function () {
        $("#passupdate").valid();
    });
</script>