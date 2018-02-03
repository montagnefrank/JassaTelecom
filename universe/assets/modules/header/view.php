<?php
////////////////////////////////////////////////////////////////////////////HEADER  VIEW
?>
<!-- BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#" gotopanel='home' class="menu_btn">Jassa</a></li>
    <li><a >Website</a></li>
    <li class="active"> Header </li>
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
    <div class="row" >
        <div class="col-md-6">   
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-cogs"></span> Menu Principal</h3>                                
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>                                   
                </div>
                <div class="panel-body">
                    <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" role="form" id="editmenu_form" class="form-horizontal" method="post">
                        <?php
                        $menu_select = "SELECT idMenu,nombreMenu,enlaceMenu,estadoMenu FROM jas_menu ";
                        $menu_result = $link->query($menu_select) or die($link->error);

                        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                            if ($menu_row['estadoMenu'] == 1) {
                                $checked = 'checked';
                            } else {
                                $checked = '';
                            }
                            echo '   
                            <div class="form-group">
                                <label class="col-md-4 control-label text-left">' . $menu_row['nombreMenu'] . '</label>
                                <div class="col-md-3">
                                    <label class="switch">
                                        <input type="checkbox" class="switch" name="' . $menu_row['idMenu'] . '_check"  value="' . $menu_row['idMenu'] . '" ' . $checked . '/>
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <span class="help-block"><input name="' . $menu_row['idMenu'] . '_newname" type="text" class="form-control" placeholder="Cambiar texto" ></span>
                                </div>                                                                                
                            </div>
                         ';
                        }
                        ?>
                </div>
                <div class="panel-footer">
                    <button class="pull-right btn btn-success" name="editmenu"  type="submit"  id="editmenu" data-toggle="tooltip" data-placement="right" title="Edtar Menu">
                        <span class="beforeLoad" ><span class="fa fa-edit"></span> Editar Menu </span>
                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                    </button>
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" id="quitarpanel">
                <div class="panel-body">
                    <h3><span class="fa fa-picture-o"></span> Cambiar Logo</h3>                                    
                    <p>Seleciona la imagen de  <code>logo principal</code> para reemplazar la actual</p>
                    <form action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                            <input  class="fileinput btn-info" type="file" name="fileToUpload" id="fileToUpload" data-filename-placement="inside" title="Buscar logo">
                        </div>
                </div>
                <div class="panel-footer">
                    <button class="pull-right btn btn-success" name="submitnewlogo"  type="submit"  id="submitnewlogo" data-toggle="tooltip" data-placement="right" title="Cambiar Logo">
                        <span class="beforeLoad" ><span class="fa fa-upload"></span> Cambiar logo </span>
                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                    </button>
                </div>
                </from>
            </div>
        </div>
    </div>
    <?php
    $slider_select = "SELECT * FROM jas_slider ";
    $slider_result = $link->query($slider_select) or die($link->error);
    $slider_row = array();
    $slider_result->data_seek(0);
    $slider_row[0] = $slider_result->fetch_array(MYSQLI_NUM);
    $slider_result->data_seek(1);
    $slider_row[1] = $slider_result->fetch_array(MYSQLI_NUM);
    $slider_result->data_seek(2);
    $slider_row[2] = $slider_result->fetch_array(MYSQLI_NUM);
    ?>
    <div class="col-md-6">
        <div class="panel panel-default">                            
            <div class="panel-body panel-body-image">
                <img src="../assets/img/slide1.jpg" alt="Slide1"/>
                <a href="#" class="panel-body-inform">
                    <span class="fa fa-edit"></span>
                </a>
            </div>
            <div class="panel-body">
                <h3>Slide 1 &mdash; Editar la primera diapositiva</h3>
                <p>Texto principal:</p>
                <input type="text" class="form-control pushbottom uptext1" value="<?php echo $slider_row[0][1]; ?>" placeholder="Campo en blanco">
                <p>Texto intermedio:</p>
                <input type="text" class="form-control pushbottom centertext1" value="<?php echo $slider_row[0][2]; ?>" placeholder="Campo en blanco">
                <p>Texto inferior:</p>
                <input type="text" class="form-control pushbottom bottomtext1" value="<?php echo $slider_row[0][3]; ?>" placeholder="Campo en blanco">
                <p>Texto del boton:</p>
                <input type="text" class="form-control pushbottom buttext1" value="<?php echo $slider_row[0][4]; ?>" placeholder="Campo en blanco">
                <div class="panel panel-default">
                    <form id="slide1form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-heading">
                            <h6>Cambiar imagen</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Seleciona la imagen de  <code>fondo del slider</code> para reemplazar la actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="slide1file" type="file" id="file-simple"/>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-success" name="slide1newimg"  type="submit"  id="slide1newimg" data-toggle="tooltip" data-placement="right" title="Editar Slide">
                                <span class="beforeLoad" > Editar Slide </span>
                                <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-footer text-muted">
                <span class="fa fa-image"></span> Slider Principal
                <span class="fa fa-list"></span> 1
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">                            
            <div class="panel-body panel-body-image">
                <img src="../assets/img/slide2.jpg" alt="Slide2"/>
                <a href="#" class="panel-body-inform">
                    <span class="fa fa-edit"></span>
                </a>
            </div>
            <div class="panel-body">
                <h3>Slide 2 &mdash; Editar la segunda diapositiva</h3>
                <p>Texto principal:</p>
                <input type="text" class="form-control pushbottom uptext2" value="<?php echo $slider_row[1][1]; ?>" placeholder="Campo en blanco">
                <p>Texto intermedio:</p>
                <input type="text" class="form-control pushbottom centertext2" value="<?php echo $slider_row[1][2]; ?>" placeholder="Campo en blanco">
                <p>Texto inferior:</p>
                <input type="text" class="form-control pushbottom bottomtext2" value="<?php echo $slider_row[1][3]; ?>" placeholder="Campo en blanco">
                <p>Texto del boton:</p>
                <input type="text" class="form-control pushbottom buttext2" value="<?php echo $slider_row[1][4]; ?>" placeholder="Campo en blanco">
                <div class="panel panel-default">
                    <form id="slide2form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                        <div class="panel-heading">
                            <h6>Cambiar imagen</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Seleciona la imagen de  <code>fondo del slider</code> para reemplazar la actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="slide2file" type="file" id="file-simple2"/>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-success" name="slide2newimg"  type="submit"  id="slide2newimg" data-toggle="tooltip" data-placement="right" title="Editar Slide">
                                <span class="beforeLoad" > Editar Slide </span>
                                <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-footer text-muted">
                <span class="fa fa-image"></span> Slider Principal
                <span class="fa fa-list"></span> 2
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">                            
            <div class="panel-body panel-body-image">
                <img src="../assets/img/slide3.jpg" alt="Slide3"/>
                <a href="#" class="panel-body-inform">
                    <span class="fa fa-edit"></span>
                </a>
            </div>
            <div class="panel-body">
                <form id="slide3form" action="<?php echo "assets/modules/" . $panel . "/control.php"; ?>" method="post" enctype="multipart/form-data">
                    <h3>Slide 3 &mdash; Editar la tercera diapositiva</h3>
                    <p>Texto principal:</p>
                    <input type="text" class="form-control pushbottom uptext3" value="<?php echo $slider_row[2][1]; ?>" placeholder="Campo en blanco">
                    <p>Texto intermedio:</p>
                    <input type="text" class="form-control pushbottom centertext3" value="<?php echo $slider_row[2][2]; ?>" placeholder="Campo en blanco">
                    <p>Texto inferior:</p>
                    <input type="text" class="form-control pushbottom bottomtext3" value="<?php echo $slider_row[2][3]; ?>" placeholder="Campo en blanco">
                    <p>Texto del boton:</p>
                    <input type="text" class="form-control pushbottom buttext3" value="<?php echo $slider_row[2][4]; ?>" placeholder="Campo en blanco">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6>Cambiar imagen</h6>
                        </div>
                        <div class="panel-body">                                   
                            <p>Seleciona la imagen de  <code>fondo del slider</code> para reemplazar la actual</p>
                            <div style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px;">
                                <input name="slide3file" type="file" id="file-simple3"/>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="pull-right btn btn-success" name="slide3newimg"  type="submit"  id="slide3newimg" data-toggle="tooltip" data-placement="right" title="Editar Slide">
                                <span class="beforeLoad" > Editar Slide </span>
                                <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer text-muted">
                <span class="fa fa-image"></span> Slider Principal
                <span class="fa fa-list"></span> 3
            </div>
        </div>

    </div>
</div>