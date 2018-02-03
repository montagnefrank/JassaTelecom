<?php
////////////////////////////////////////////////////////////////////////////BANNER  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="main.php">Jassa</a></li>
    <li>Website</li>
    <li class="active">Experiencia</li>
</ul>
<!-- BREADCRUMB --> 
<div class="page-content-wrap">   
    <?php
    if (isset($_SESSION['msg'])) {
        echo '
                <div class="row notificactionbox">
                    <div class="col-md-12">
                        <div class="widget widget-';
        echo $_SESSION['box'];
        echo ' widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-exclamation"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-title">Notificación</div>
                                <div class="widget-subtitle">
                                    <div role="alert">
                                        ' . $_SESSION['msg'] . '
                                    </div>
                                </div>
                            </div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>                             
                        </div>
                    </div>
                </div>
        ';
        unset($_SESSION['msg']);
    }
    ?>
    <div class="col-md-12">
        <?php
        $titles_select = "SELECT * FROM jas_misc";
        $titles_result = $link->query($titles_select) or die($link->error);
        $titles_row = array();
        $titles_result->data_seek(0);
        $titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title" id="modalheadtitle">Editar titulos</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom editTitle" value="<?php echo $titles_row[0]['bannerTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom editSubtitle" value="<?php echo $titles_row[0]['bannerSubtitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Descripcion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom editText" value="<?php echo $titles_row[0]['bannerText']; ?>">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <form id="editProt_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                            <div class="panel-heading">
                                <h6>Imagen 1</h6>
                            </div>
                            <div class="panel-body">                                   
                                <p>La imagen debe ser de  <code>960 x 600 px</code> para que encaje adecuadamente</p>
                                <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                    <input name="img1Port_file" type="file" id="file-simple1"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6>Imagen 2</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>La imagen debe ser de  <code>960 x 600 px</code> para que encaje adecuadamente</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="img2Port_file" type="file" id="file-simple2"/>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>  
            </div>
            <div class="col-md-6">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6>Imagen 3</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>La imagen debe ser de  <code>960 x 600 px</code> para que encaje adecuadamente</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="img3Port_file" type="file" id="file-simple3"/>
                            </div>
                        </div>
                        <input name="idPort" type="hidden" id="idPort" value=""/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pushbottom">
                <div class="col-md-3">
                    <a href="#">
                        <img src="../assets/img/banner1.jpg" class="img-responsive img-text"/>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="../assets/img/banner2.jpg" class="img-responsive img-text"/>
                    </a>                                                    
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="../assets/img/banner3.jpg" class="img-responsive img-text"/>
                    </a>                                                    
                </div>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button class="pull-right btn btn-success" name="saveBanner"  type="submit"  id="saveBanner" data-toggle="tooltip" data-placement="right" title="Guardar">
                    <span class="beforeLoad" > Guardar </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>
</div>