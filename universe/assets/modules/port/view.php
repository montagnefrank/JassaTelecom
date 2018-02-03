<?php
////////////////////////////////////////////////////////////////////////////PORTFOLIO  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Portafolio </li>
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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar titulos</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <?php
                $titles_select = "SELECT * FROM jas_misc";
                $titles_result = $link->query($titles_select) or die($link->error);
                $titles_row = array();
                $titles_result->data_seek(0);
                $titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom portTitle" value="<?php echo $titles_row[0]['portTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom portSubtitle" value="<?php echo $titles_row[0]['portSubtitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Titulo inferior</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom portTitle2" value="<?php echo $titles_row[0]['shareTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo inferior</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom portSubtitle2" value="<?php echo $titles_row[0]['shareSubtitle']; ?>">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-info" name="edittitles"  type="submit"  id="edittitles" data-toggle="tooltip" data-placement="right" title="Edtar Titulos">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Editar Titulos </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-4">                        
        <a href="#" class="tile tile-info tile-valign showmodal"><span class="fa fa-plus-square"></span></a>                        
    </div>  
    <div class="col-md-8">                        
        <div class="panel panel-default">   
            <div class="panel-body">
                <div class="panel panel-default">
                    <form id="editProt_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-heading">
                            <h6>cambiar archivo del boton</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Ingrese archivo en  <code>formato PDF</code> para reemplazar el actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="newPDF_file" type="file" id="file-simple4"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" name="newPDFbtn"  type="submit"  id="newPDFbtn" data-toggle="tooltip" data-placement="right" title="Cambiar">
                    <span class="beforeLoad" > Cambiar</span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                </button>
            </div>
        </div>                
    </div>  

    <?php
    $menu_select = "SELECT idPort,titlePort,subtitlePort,textPort,img1Port,img2Port,img3Port,statusPort FROM jas_portfolio ";
    $menu_result = $link->query($menu_select) or die($link->error);
    while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
        if ($menu_row['statusPort'] == 1) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo '
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-briefcase"></span> <span class="port_title">' . $menu_row['titlePort'] . '</span></h3>       
                            <label class="switch pull-right">
                                <input  type="checkbox" class="switch switch-ro" name="' . $menu_row['idSoluc'] . '_check"  value="1" ' . $checked . '/>
                                <span></span>
                            </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <h3 class="panel-title port_subtitle"> ' . $menu_row['subtitlePort'] . '</h3>   
                                <h3 class="panel-title port_id hidethis"> ' . $menu_row['idPort'] . '</h3>   
                            </div>
                            
                            <p class="port_text">
                                ' . $menu_row['textPort'] . '
                            </p>
                            <div class="row pushbottom">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="../assets/img/portfolio/' . $menu_row['img1Port'] . '.jpg" class="img-responsive img-text"/>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="../assets/img/portfolio/' . $menu_row['img2Port'] . '.jpg" class="img-responsive img-text"/>
                                    </a>                                                    
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="../assets/img/portfolio/' . $menu_row['img3Port'] . '.jpg" class="img-responsive img-text"/>
                                    </a>                                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-info pushleft editarPort" data-toggle="modal" data-target="#modal"><span class="fa fa-edit"></span> Editar</button>
                            <button class="pull-right btn btn-danger" onClick="notyConfirm(' . $menu_row['idPort'] . ');"><span class="fa fa-times"></span> Eliminar</button>
                        </div>
                    </div>
                </div>
            ';
    }
    ?>
    <div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalheadtitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="modalheadtitle">Editar Proyecto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Titulo</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom editTitle" value="Titulo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Sub Titulo</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom editSubtitle" value="Subtitulo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Descripcion</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control pushbottom editText" value="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-6 switch "> Estado
                            <input type="checkbox" class="switch switchmodal" name="edtCheck"  value="1" checked=""/>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="panel panel-default">   
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <form id="editProt_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h6>Imagen 1</h6>
                                </div>
                                <div class="panel-body">                                   
                                    <p>La imagen debe ser de  <code>375 x 550 px</code> para que encaje adecuadamente</p>
                                    <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                        <input name="img1Port_file" type="file" id="file-simple1"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">   
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6>Imagen 2</h6>
                            </div>
                            <div class="panel-body">                                   
                                <p>La imagen debe ser de  <code>375 x 550 px</code> para que encaje adecuadamente</p>
                                <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                    <input name="img2Port_file" type="file" id="file-simple2"/>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">   
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6>Imagen 3</h6>
                            </div>
                            <div class="panel-body">                                   
                                <p>La imagen debe ser de  <code>375 x 550 px</code> para que encaje adecuadamente</p>
                                <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                    <input name="img3Port_file" type="file" id="file-simple3"/>
                                </div>
                            </div>
                            <input name="idPort" type="hidden" id="idPort" value=""/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button class="pull-right btn btn-success" name="savePort"  type="submit"  id="savePort" data-toggle="tooltip" data-placement="right" title="Guardar">
                        <span class="beforeLoad" > Guardar </span>
                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>