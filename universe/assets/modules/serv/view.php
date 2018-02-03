<?php
////////////////////////////////////////////////////////////////////////////SERVICES  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Servicios </li>
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
    <div class="col-md-6">   
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
                        <input type="text" class="form-control pushbottom serviceTitle" value="<?php echo $titles_row[0]['serviceTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom serviceSubtitle" value="<?php echo $titles_row[0]['serviceSubtitle']; ?>">
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
    <div class="col-md-6">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-plus-square"></span> Agregar nuevo</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom newserviceTitle" placeholder="Ingrese el titulo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom newserviceSubtitle" placeholder="Ingrese el subtitulo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Icono</label>
                    <div class="col-md-10">
                        <button id="pick_icon" class="btn btn-default" data-iconset="fontawesome" data-icon="fa-exclamation-circle" role="iconpicker"></button>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-info" name="addnewservice"  type="submit" onClick="addnew();" id="addnewservice" data-toggle="tooltip" data-placement="right" title="Nuevo servicio">
                    <span class="beforeLoad" ><span class="fa fa-plus"></span> Agregar Nuevo </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-12">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar Servicios</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <?php
                    $menu_select = "SELECT idService,iconService,titleService,textService,statusService FROM jas_services ";
                    $menu_result = $link->query($menu_select) or die($link->error);
                    $idlist = '';
                    while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                        if ($menu_row['statusService'] == 1) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        echo '   
                            <div class="form-group">
                                <label class="col-md-4 control-label text-left"><input name="' . $menu_row['idService'] . '_title" type="text" class="form-control" value="' . $menu_row['titleService'] . '" > </label>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" class="switch" name="' . $menu_row['idService'] . '_check"  value="1" ' . $checked . '/>
                                        <span></span>
                                    </label>
                                    <i class="fa fa-times-circle-o deletetimes" aria-hidden="true" onClick="notyConfirm(' . $menu_row['idService'] . ');"></i>
                                </div>
                                <div class="col-md-6">
                                    <span class="help-block"><input name="' . $menu_row['idService'] . '_text" type="text" class="form-control" value="' . $menu_row['textService'] . '" > </span>
                                </div>                                                                                
                            </div>
                         ';
                        $idlist .= $menu_row['idService'] . ",";
                    }
                    $idlist = substr(trim($idlist), 0, -1);
                    echo '<input name="idList" type="hidden" class="form-control" value="' . $idlist . '" >'
                    ?>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" name="editserv"  type="submit"  id="editserv" data-toggle="tooltip" data-placement="right" title="Editar servicios">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar Cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
        </form>
    </div>
</div>