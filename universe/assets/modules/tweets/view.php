<?php
////////////////////////////////////////////////////////////////////////////TWEETS  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Testimonios de clientes </li>
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
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar Testimonios</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <?php
                    $menu_select = "SELECT idTweet,nameTweet,textTweet,statusTweet FROM jas_tweets ";
                    $menu_result = $link->query($menu_select) or die($link->error);
                    $idlist = '';
                    while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                        if ($menu_row['statusTweet'] == 1) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        echo '   
                            <div class="form-group">
                                <label class="col-md-4 control-label text-left"><input name="' . $menu_row['idTweet'] . '_name" type="text" class="form-control" value="' . $menu_row['nameTweet'] . '" > </label>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" class="switch" name="' . $menu_row['idTweet'] . '_check"  value="1" ' . $checked . '/>
                                        <span></span>
                                    </label>
                                    <i class="fa fa-times-circle-o deletetimes" aria-hidden="true" onClick="notyConfirm(' . $menu_row['idTweet'] . ');"></i>
                                </div>
                                <div class="col-md-6">
                                    <span class="help-block"><input name="' . $menu_row['idTweet'] . '_text" type="text" class="form-control" value="' . $menu_row['textTweet'] . '" > </span>
                                </div>                                                                                
                            </div>
                         ';
                        $idlist .= $menu_row['idTweet'] . ",";
                    }
                    $idlist = substr(trim($idlist), 0, -1);
                    echo '<input name="idList" type="hidden" class="form-control" value="' . $idlist . '" >'
                    ?>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" name="edittweets"  type="submit"  id="edittweets" data-toggle="tooltip" data-placement="right" title="Editar testimonios">
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
                <img src="../assets/img/bg1.jpg" alt="Testimonios de clientes"/>
                <a href="#" class="panel-body-inform">
                    <span class="fa fa-edit"></span>
                </a>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <form id="bgTweet_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-heading">
                            <h6>Cambiar imagen</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Seleciona la imagen de  <code>fondo de la seccion</code> para reemplazar la actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="bgTweet_file" type="file" id="file-simple2"/>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-success" name="bgTweet_btn"  id="bgTweet_btn" data-toggle="tooltip" data-placement="right" title="Cambiar">
                                <span class="beforeLoad" > Cambiar </span>
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
                    <label class="col-md-2 control-label">Nombre</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom newnameTweet" placeholder="Ingrese el nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Testimonio</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom newtextTweet" placeholder="Ingrese el testimonio">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-info" name="addnewtweet"  type="submit" onClick="addnew();" id="addnewtweet" data-toggle="tooltip" data-placement="right" title="Nuevo testimonio">
                    <span class="beforeLoad" ><span class="fa fa-plus"></span> Agregar Nuevo </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>
</div>