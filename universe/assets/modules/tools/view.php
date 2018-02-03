<?php
////////////////////////////////////////////////////////////////////////////////TOOLS VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="main.php">Jassa</a></li>
    <li class="active" id="showview">Inicio <?php echo $_SESSION['panel'] ?></li>
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
    <div class="col-md-3">
        <form action="#" class="form-horizontal">
            <div class="panel panel-default">                                
                <div class="panel-body">
                    <h3><span class="fa fa-user"></span> <?php
                        echo $user;
                        ?></h3>
                    <p><span class="fa fa-industry"></span>  <?php
                        $val_select = "SELECT nombreUsuario FROM jas_usuario WHERE userUsuario = '" . $user . "'";
                        $val_result = $link->query($val_select) or die($link->error);
                        $val_row = $val_result->fetch_array(MYSQLI_BOTH);
                        echo $val_row[0];
                        ?></p>
                    <div class="text-center" id="user_image">
                        <img src="<?php
                        $isavatar = "assets/img/users/" . $user . ".jpg";
                        if (file_exists($isavatar)) {
                            echo "assets/img/users/" . $user;
                        } else {
                            echo "assets/img/users/default";
                        }
                        ?>.jpg" class="img-thumbnail"/>
                    </div>                                    
                </div>
                <div class="panel-body form-group-separated">
                    <div class="form-group">                                        
                        <div class="col-md-12 col-xs-12">
                            <a href="#" class="btn btn-info btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_photo">Cambiar Foto</a>
                        </div>
                    </div>
                    <div class="form-group">                                        
                        <div class="col-md-12 col-xs-12">
                            <a href="#" class="btn btn-danger btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_password">Cambiar contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <form id="themeform" name="themeform" class="form-horizontal" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-edit"></span> Cambiar tema </h3>
                </div>
                <div class="panel-body">
                    <p> Seleccione un tema de la lista</p>
                    <div class="panel-body list-group">
                        <a style="background-color: #3780BF;" class="list-group-item"><span class="fa fa-paint-brush"></span> Azul <label class="pull-right check"><input type="radio" class="icheckbox iradio" name="theme" value="blue" checked="checked"/></label></a>
                        <a style="background-color: #37bf39;" class="list-group-item"><span class="fa fa-paint-brush"></span> Verde <label class="pull-right check"><input type="radio" class="icheckbox iradio" name="theme" value="green"/></label></a>
                        <a style="background-color: #bf3737;" class="list-group-item"><span class="fa fa-paint-brush"></span> Rojo <label class="pull-right check"><input type="radio" class="icheckbox iradio" name="theme" value="red"/></label></a>
                        <a style="background-color: #bdbdbd;" class="list-group-item"><span class="fa fa-paint-brush"></span> Claro <label class="pull-right check"><input type="radio" class="icheckbox iradio" name="theme" value="light"/></label></a>
                        <a style="background-color: #2d3945;" class="list-group-item"><span class="fa fa-paint-brush"></span> Oscuro <label class="pull-right check"><input type="radio" class="icheckbox iradio" name="theme" value="dark"/></label></a>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="pull-right btn btn-default" name="newtheme"  type="submit"  id="newtheme" data-toggle="tooltip" data-placement="right" title="Cambiar tema"><span class="fa fa-edit"></span> Cambiar tema</button>
                </div>
            </form>
        </div>
    </div>

</div>
<div class="modal animated fadeIn" id="modal_change_photo" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="smallModalHead">Cambiar Foto</h4>
            </div>                    
            <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                    <input  class="fileinput btn-info" type="file" name="fileToUpload" id="fileToUpload" data-filename-placement="inside" title="Buscar imagen">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                    <input class="btn btn-success" type="submit" value="Cambiar foto" name="submitnewavatar">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal animated fadeIn" id="modal_change_password" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="passupdate" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="smallModalHead">Cambiar contraseña</h4>
                </div>
                <div class="modal-body">
                    <p>Por favor introduzca los datos en los formularios a continuación para realizar el cambio de su contraseña</p>
                </div>
                <div class="modal-body form-horizontal form-group-separated">                        
                    <div class="form-group">
                        <label class="col-md-3 control-label">Contraseña anterior</label>
                        <div class="col-md-9">
                            <input name="oldpass" id="oldpass" type="password" class="form-control"/>
                            <span class="help-block">ingrese su contraseña actual</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nueva contraseña</label>
                        <div class="col-md-9">
                            <input name="newpass" id="newpass" type="password" class="form-control"/>
                            <span class="help-block">ingrese una contraseña entre 8 a 16</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Repetir contraseña</label>
                        <div class="col-md-9">
                            <input name="reppass" id="reppass" type="password" class="form-control"/>
                            <span class="help-block">repita la contraseña anterior</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                    <button name="submitnewpass" id="submitnewpass" type="submit" class="btn btn-success" ><span class="fa fa-save"></span> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div> 