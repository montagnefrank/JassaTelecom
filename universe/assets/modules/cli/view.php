<?php
////////////////////////////////////////////////////////////////////////////CLients  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="main.php">Jassa</a></li>
    <li>Website</li>
    <li class="active">Clientes</li>
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
                        <input type="text" class="form-control pushbottom clientsTitle" value="<?php echo $titles_row[0]['clientsTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom clientsSubtitle" value="<?php echo $titles_row[0]['clientsSubtitle']; ?>">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-info" name="edittitles"  type="submit"  id="edittitles" data-toggle="tooltip" data-placement="right" title="Edtar Menu">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Editar Titulos </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-6 clientsaddnew">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Nuevo Cliente</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <form id="member_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6>Logo de cliente</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>La imagen debe ser de  <code>500 x 500 px</code> para que encaje adecuadamente</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="clientProfile_file" type="file" id="file-simple1"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nombre</label>
                        <div class="col-md-10">
                            <input name="name_client" type="text" class="form-control" placeholder="Nombre del cliente" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Estado</label>
                        <div class="col-md-10">
                            <label class="switch">
                                <input type="checkbox" class="switch switchcheck" name="status_check"  value="1" checked="checked"/>
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <input id="typeaction" name="newmember" type="hidden" class="form-control" value="true"/>
                    <input id="memberid" name="memberid" type="hidden" class="form-control" value="true"/>
                </form>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" 
                        name="newclient"  
                        type="submit"  
                        id="newclient" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="Nuevo Cliente">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar Cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4 class="text-title">Clientes</h4>
                <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <div class="row">
                        <?php
                        $menu_select = "SELECT idClient,photoClient,nameClient,statusClient FROM jas_clients ";
                        $menu_result = $link->query($menu_select) or die($link->error);
                        $idlist = '';
                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['statusClient'] == 1) {
                                $checked = 'checked';
                            } else {
                                $checked = '';
                            }
                            echo '   
                            <div class="col-md-2 col-xs-2">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <a href="#" class="friend">
                                            <img src="../../../assets/img/clientes/' . $menu_row['photoClient'] . '.jpg"/>
                                            <span>' . $menu_row['nameClient'] . '</span>
                                            <label class="switch">
                                                <input type="checkbox" class="switch" name="' . $menu_row['idClient'] . '_check"  value="1" ' . $checked . '/>
                                                <span></span>
                                            </label>
                                            <i class="fa fa-times-circle-o deletetimes" aria-hidden="true" onClick="notyConfirm(' . $menu_row['idClient'] . ');"></i>
                                        </a>                                            
                                    </div>
                                </div>
                            </div>
                         ';
                            $idlist .= $menu_row['idClient'] . ",";
                        }
                        $idlist = substr(trim($idlist), 0, -1);
                        echo '<input name="idList" type="hidden" class="form-control" value="' . $idlist . '" >'
                        ?>
                    </div>
            </div>
            <div class="panel-footer">
                <button class="pull-right btn btn-success" name="editclient"  type="submit"  id="editclient" data-toggle="tooltip" data-placement="right" title="Editar Clientes">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar Cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;">
                </button>
            </div>
            </form>
        </div>
    </div>
</div>