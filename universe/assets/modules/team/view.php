<?php
////////////////////////////////////////////////////////////////////////////TEAM  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Nuestro Equipo </li>
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
                        <input type="text" class="form-control pushbottom teamTitle" value="<?php echo $titles_row[0]['teamTitle']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control pushbottom teamSubtitle" value="<?php echo $titles_row[0]['teamSubtitle']; ?>">
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


    <div class="col-md-4">                        
        <a href="#" class="tile tile-info tile-valign newmember"><span class="fa fa-plus-square"></span></a>                        
    </div>  

    <div class="col-md-6 hidethis memberformpanel">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar Miembro</h3>                                
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                   
            </div>
            <div class="panel-body">
                <form id="member_form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6>Imagen de perfil</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>La imagen debe ser de  <code>500 x 500 px</code> para que encaje adecuadamente</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="teamProfile_file" type="file" id="file-simple1"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nombre</label>
                        <div class="col-md-10">
                            <input name="name_team" type="text" class="form-control" placeholder="Nombre del usuario" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Cargo</label>
                        <div class="col-md-10">
                            <input name="job_team" type="text" class="form-control" placeholder="Cargo del usuario" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Perfil</label>
                        <div class="col-md-10">
                            <input name="profile_team" type="text" class="form-control" placeholder="Breve perfil" /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><span class="fa fa-facebook"></span></label>
                        <div class="col-md-10">
                            <input name="fb_team" type="text" class="form-control" placeholder="Enlace de FB" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><span class="fa fa-twitter"></span></label>
                        <div class="col-md-10">
                            <input name="tw_team" type="text" class="form-control" placeholder="Enlace de TW" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><span class="fa fa-instagram"></span></label>
                        <div class="col-md-10">
                            <input name="ig_team" type="text" class="form-control" placeholder="Enlace de IG" />
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
                        name="editmember"  
                        type="submit"  
                        id="editmember" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="Edtar Miembros">
                    <span class="beforeLoad" ><span class="fa fa-save"></span> Guardar Cambios </span>
                    <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">   
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-cogs"></span> Editar Miembros</h3>                                
            <ul class="panel-controls">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>                                   
        </div>
        <div class="panel-body">
            <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" class="form-horizontal" method="post">
                <?php
                $menu_select = "SELECT idTeam,photoTeam,nameTeam,jobTeam,profileTeam,fbTeam,igTeam,twTeam,statusTeam FROM jas_team ";
                $menu_result = $link->query($menu_select) or die($link->error);
                $idlist = '';
                while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                    if ($menu_row['statusTeam'] == 1) {
                        $checked = 'checked';
                    } else {
                        $checked = '';
                    }
                    echo '   
                            <div class="col-md-4">

                                <div class="panel panel-default">
                                    <div class="panel-body profile bg-primary">

                                        <div class="profile-image">
                                            <img src="../assets/img/team/' . $menu_row['photoTeam'] . '.jpg" alt="' . $menu_row['nameTeam'] . '">
                                        </div>
                                        <div class="profile-data">
                                            <div class="profile-data-name">' . $menu_row['nameTeam'] . '</div>
                                            <div class="profile-data-title">' . $menu_row['jobTeam'] . '</div>
                                        </div>
                                        <div class="profile-controls">
                                            <a href="#" class="profile-control-left deletemember" onClick="notyConfirm(' . $menu_row['idTeam'] . ');"><span class="fa fa-times"></span></a>
                                            <a href="#" class="profile-control-left pushtop32 noborder">
                                                <label class="switch">
                                                    <input type="checkbox" class="switch" name="' . $menu_row['idTeam'] . '_check"  value="1" ' . $checked . '/>
                                                    <span></span>
                                                </label>
                                            </a>
                                            <a href="#" class="profile-control-right editprofile"><span class="fa fa-edit"></span></a>
                                        </div>

                                    </div>
                                    <div class="panel-body list-group">
                                        <a href="#" class="list-group-item teamprofile"><span class="help-block">' . $menu_row['profileTeam'] . '</span></a>
                                        <a href="#" class="list-group-item hidethis2 idteam"><span class="help-block">' . $menu_row['idTeam'] . '</span></a>
                                        <a href="#" class="list-group-item fbprofile"><span class="help-block"><span class="fa fa-facebook"></span><span>' . $menu_row['fbTeam'] . '</span></span></a>
                                        <a href="#" class="list-group-item twprofile"><span class="help-block"><span class="fa fa-twitter"></span><span>' . $menu_row['twTeam'] . '</span></span></a>
                                        <a href="#" class="list-group-item igprofile"><span class="help-block"><span class="fa fa-instagram"></span><span>' . $menu_row['igTeam'] . '</span></span></a>
                                    </div>                            
                                </div>

                            </div>
                         ';
                    $idlist .= $menu_row['idSoluc'] . ",";
                }
                $idlist = substr(trim($idlist), 0, -1);
                echo '<input name="idList" type="hidden" class="form-control" value="' . $idlist . '" >'
                ?>
        </div>
    </div>
</form>
</div>
</div>