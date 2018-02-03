<script type="text/javascript" src="assets/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>         
<script type='text/javascript' src='assets/js/plugins/icheck/icheck.min.js'></script>        
<script type="text/javascript" src="assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="assets/js/plugins/morris/morris.min.js"></script>       
<script type="text/javascript" src="assets/js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="assets/js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
<script type='text/javascript' src='assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
<script type="text/javascript" src="assets/js/plugins/owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/moment.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/js/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="assets/js/plugins/form/jquery.form.js"></script>
<script type="text/javascript" src="assets/js/plugins/cropper/cropper.min.js"></script>
<script type='text/javascript' src='assets/js/plugins/jquery-validation/jquery.validate.js'></script>
<script type="text/javascript" src="assets/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>     
<script type="text/javascript" src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type='text/javascript' src='assets/js/plugins/noty/jquery.noty.js'></script>
<script type='text/javascript' src='assets/js/plugins/noty/layouts/topCenter.js'></script>
<script type='text/javascript' src='assets/js/plugins/noty/layouts/topLeft.js'></script>
<script type='text/javascript' src='assets/js/plugins/noty/layouts/topRight.js'></script>   
<script type='text/javascript' src='assets/js/plugins/noty/themes/default.js'></script>
<script type="text/javascript" src="assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="https://cdn.rawgit.com/download/glyphicons/0.1.0/glyphicons.js"></script>
<script type="text/javascript" src="assets/js/plugins/fileinput/fileinput.min.js"></script> 
<!--<script type="text/javascript" src="assets/js/settings.js"></script>-->
<script type="text/javascript" src="assets/js/plugins.js"></script>        
<script type="text/javascript" src="assets/js/actions.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/iconpick/dist/js/bootstrap-iconpicker-iconset-all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/iconpick/dist/js/bootstrap-iconpicker.min.js"></script>
<script type="text/javascript">
    var validatepass = $("#loginform").validate({
        ignore: [],
        rules: {
            user: {
                required: true,
                maxlength: 16
            },
            pass: {
                required: true,
                minlength: 8,
                maxlength: 16
            }
        }
    });
    $(document).on("click", "#submitlogin", function () {
        $("#loginform").valid();
    });
    
    $(".menu_btn").on("click", function () {
        var newpanel = $(this).attr("gotopanel");
        $.post("assets/scripts/panelcontrol.php", {panel: newpanel}, function (data) {
            location.reload();
        });
    });
    
    $(".notificactionbox").animate({width: 'toggle'}, 600);
    $(document).on("click", function () {
        $(".notificactionbox").animate({width: 'hide'}, 600);
    });
</script>