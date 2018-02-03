<?php
////////////////////////////////////////////////////////////////////////////SOLUC  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Soluciones Corporativas </li>
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
                        <input type="text" class="form-control pushbottom solucTitle" value="<?php echo $titles_row[0]['solucTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom solucSubtitle" value="<?php echo $titles_row[0]['solucSubtitle']; ?>">
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
                        <input type="text" class="form-control pushbottom newsolucTitle" placeholder="Ingrese el titulo">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom newsolucSubtitle" placeholder="Ingrese el subtitulo">
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
                <button class="pull-right btn btn-info" name="addnewsoluc"  type="submit" onClick="addnew();" id="addnewsoluc" data-toggle="tooltip" data-placement="right" title="Nueva solucion">
                    <span class="beforeLoad" ><span class="fa fa-plus"></span> Agregar Nuevo </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-12">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar Soluciones</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <?php
                    $menu_select = "SELECT idSoluc,iconSoluc,titleSoluc,textSoluc,statusSoluc FROM jas_soluc ";
                    $menu_result = $link->query($menu_select) or die($link->error);
                    $idlist = '';
                    while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                        if ($menu_row['statusSoluc'] == 1) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        echo '   
                            <div class="form-group">
                                <label class="col-md-4 control-label text-left"><input name="' . $menu_row['idSoluc'] . '_title" type="text" class="form-control" value="' . $menu_row['titleSoluc'] . '" > </label>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" class="switch" name="' . $menu_row['idSoluc'] . '_check"  value="1" ' . $checked . '/>
                                        <span></span>
                                    </label>
                                    <i class="fa fa-times-circle-o deletetimes" aria-hidden="true" onClick="notyConfirm(' . $menu_row['idSoluc'] . ');"></i>
                                </div>
                                <div class="col-md-6">
                                    <span class="help-block"><input name="' . $menu_row['idSoluc'] . '_text" type="text" class="form-control" value="' . $menu_row['textSoluc'] . '" > </span>
                                </div>                                                                                
                            </div>
                         ';
                        $idlist .= $menu_row['idSoluc'] . ",";
                    }
                    $idlist = substr(trim($idlist), 0, -1);
                    echo '<input name="idList" type="hidden" class="form-control" value="' . $idlist . '" >'
                    ?>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" name="editsoluc"  type="submit"  id="editsoluc" data-toggle="tooltip" data-placement="right" title="Editar Soluciones">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar Cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">                            
            <div class="panel-body panel-body-image">
                <img src="../assets/img/corp.jpg" alt="Soluciones Corporativas"/>
                <a href="#" class="panel-body-inform">
                    <span class="fa fa-edit"></span>
                </a>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <form id="slouc_bg" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-heading">
                            <h6>Cambiar imagen</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Seleciona la imagen de  <code>fondo de la seccion</code> para reemplazar la actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="slouc_bg_file" type="file" id="file-simple2"/>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-success" name="slouc_bg_btn"  type="submit"  id="slouc_bg_btn" data-toggle="tooltip" data-placement="right" title="Editar Fondo">
                                <span class="beforeLoad" > Editar Fondo </span>
                                <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-footer text-muted">
                <span class="fa fa-image"></span> Fondo de la secci&oacute;n
                <span class="fa fa-list"></span> 
            </div>
        </div>
    </div>
</div>